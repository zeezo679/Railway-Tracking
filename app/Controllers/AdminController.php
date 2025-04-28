<?php
namespace App\Controllers;

use Ziada\Mvc\Controllers\AbstractContoller;
use App\Models\User;
use Ziada\Mvc\Http\Response;

class AdminController extends AbstractContoller
{
    public function showAdminDashboard()
    {
        return $this->render('admin');
    }
        
}
?>


