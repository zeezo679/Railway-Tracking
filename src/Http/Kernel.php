<?php

namespace Ziada\Mvc\Http;

use FastRoute\RouteCollector;
use Ziada\Mvc\Controllers\AbstractContoller;
use Ziada\Mvc\Http\Response;

use function FastRoute\simpleDispatcher;


class Kernel
{
    public function handle(Request $request): Response
    {
      // ? RouteCollector is a helper object from FastRoute library.
      // ? It collects (gathers) all the routes you define.
      // ? You give it routes using addRoute().
        $dispatcher = simpleDispatcher(function(RouteCollector $rc) {
            $routes = include BASE_PATH . '/routes/web.php';

            if (empty($routes)) {
                throw new \RuntimeException('No routes defined in web.php');
            }

            //? It loops over all routes you defined in web.php.
            //? For each route, it adds it to the RouteCollector.
            //? So later, when a request comes, the dispatcher can find which controller should answer.
            foreach ($routes as $route) {
                $rc->addRoute($route[0], $route[1], $route[2]);
            }
        });
        //? finds out which route matches the incoming request.
        $routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getUri());

        switch ($routeInfo[0]) {
          // ? no route
          case \FastRoute\Dispatcher::NOT_FOUND:
            return new Response('404 Not Found', 404);
            
          // ? like sending POST to GET page Not allowed
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                return new Response('405 Method Not Allowed', 405);
                
          // ? found
            case \FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                
                [$controllerClass, $method] = $handler;
                
                // ?Check if Controller Class Exists
                if (!class_exists($controllerClass)) {
                    throw new \RuntimeException("Controller class {$controllerClass} does not exist");
                }
                
                // ? Create Controller Object
                $controller = new $controllerClass();
                
                if ($controller instanceof AbstractContoller) {
                    $controller->setRequest($request);
                }
                
                if (!method_exists($controller, $method)) {
                    throw new \RuntimeException("Method {$method} does not exist in controller {$controllerClass}");
                }
                
                $response = call_user_func_array([$controller, $method], array_values($vars));

                if (!$response instanceof Response) {
                    throw new \RuntimeException("Controller method {$controllerClass}::{$method} did not return a Response");
                }

                return $response;

        }
        
        throw new \RuntimeException('Unexpected route dispatch result');
    }
}