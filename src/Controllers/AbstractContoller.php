<?php

namespace Ziada\Mvc\Controllers;
session_start();

use Ziada\Mvc\Http\Request;
use Ziada\Mvc\Http\Response;

abstract class AbstractContoller
{

  // ? store GET POST Methods

    protected ?Request $request = null;
    
    public function render(string $view, ?array $vars = []) : Response
    {
        // Extract array key to make them available in the view
        extract($vars);
        
        // Start output buffering
        ob_start();
        
        // Include the PHP view file
        require BASE_PATH.'/views/'.$view.'.php';
        
        // Get the buffered content
        $content = ob_get_clean();
        
        // Create and return a response with the content
        return new Response($content);
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    public function checkUserLogin(){
      if(!isset($_SESSION['user']['email'])){
        return $this->render('login',['errors'=>null,'old'=>[]]);   
      }
      return true;
    }

    public function checkAdminLogin(){
      if (!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] !== "admin") {
        return $this->render('login', ['errors' => null, 'old' => []]);
    }    
      return true;
    }
}