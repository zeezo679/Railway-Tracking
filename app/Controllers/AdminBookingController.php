<?php
namespace App\Controllers;

use Ziada\Mvc\Controllers\AbstractContoller;
use App\Models\User;
use Ziada\Mvc\Http\Response;

class AdminBookingController extends AbstractContoller
{
    public function showAdmin_BookingTable()
    {
        return $this->render('adminBookingTable');
    }
        
}
?>


