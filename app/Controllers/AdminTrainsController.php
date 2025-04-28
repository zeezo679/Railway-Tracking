<?php
namespace App\Controllers;

use Ziada\Mvc\Controllers\AbstractContoller;


class AdminTrainsController extends AbstractContoller
{
    public function showAdmin_TrainsTable()
    {
        return $this->render('adminTrainsTable');
    }
        
}
?>


