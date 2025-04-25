<?php

namespace Ziada\Mvc\Controllers;

use Twig\Environment;
use Ziada\Mvc\Http\Request;
use Ziada\Mvc\Http\Response;

abstract class AbstractContoller
{
    protected ?Request $request = null;
    
    public function render(string $view, ?array $vars = []) : Response
    {
        // Extract variables to make them available in the view
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
}