<?php
namespace App\Controllers;

use Ziada\Mvc\Controllers\AbstractContoller;


class AdminStationsController extends AbstractContoller
{
    public function showAdmin_StationsTable()
    {
        return $this->render('adminStationsTable');
    }
        
}
?>


