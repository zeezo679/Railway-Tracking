<?php
namespace App\Controllers;

use Ziada\Mvc\Controllers\AbstractContoller;


class AdminUsersController extends AbstractContoller
{
    public function showAdmin_UsersTable()
    {
        return $this->render('adminUserTable');
    }
        
}
?>


