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
        $dispatcher = simpleDispatcher(function(RouteCollector $rc) {
            $routes = include BASE_PATH . '/routes/web.php';

            if (empty($routes)) {
                throw new \RuntimeException('No routes defined in web.php');
            }

            foreach ($routes as $route) {
                $rc->addRoute($route[0], $route[1], $route[2]);
            }
        });

        $routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getUri());

        switch ($routeInfo[0]) {
            case \FastRoute\Dispatcher::NOT_FOUND:
                return new Response('404 Not Found', 404);
                
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                return new Response('405 Method Not Allowed', 405);
                
            case \FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                
                [$controllerClass, $method] = $handler;
                
                if (!class_exists($controllerClass)) {
                    throw new \RuntimeException("Controller class {$controllerClass} does not exist");
                }
                
                $controller = new $controllerClass();
                
                if ($controller instanceof AbstractContoller) {
                    $controller->setRequest($request);
                }
                
                if (!method_exists($controller, $method)) {
                    throw new \RuntimeException("Method {$method} does not exist in controller {$controllerClass}");
                }
                
                return call_user_func_array([$controller, $method], $vars);
        }
        
        throw new \RuntimeException('Unexpected route dispatch result');
    }
}