<?php
namespace App\Controllers;

use App\Models\Station;
use App\Models\Train;
use Ziada\Mvc\Controllers\AbstractContoller;
use App\Models\User;
use Ziada\Mvc\Http\Response;

class PaymentController extends AbstractContoller
{
    public function ShowPay()
    {
        return $this->render('payment');
    }
}
?>


