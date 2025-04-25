<?php
define("BASE_PATH", dirname(__DIR__));

require_once BASE_PATH.'/vendor/autoload.php';
use Ziada\Mvc\Http\Request;
use Ziada\Mvc\Http\Response;
use Ziada\Mvc\Http\Kernel; 
use App\Database\Connection;

$request = Request::create();

$kernel = new Kernel(); 
$response = $kernel->handle($request);

$response->send();