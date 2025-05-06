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

    public function HandlePayment()
    {
        //get train id
        //find the train with that id

        $trainId = $_POST['train_id'];
        $train = Train::Find($trainId);

        if (!$train) {
            return $this->render('payment', ['error' => 'Train not found.']);
        }
        $_SESSION['selected_train_id'] = $trainId;

        var_dump($_SESSION['selected_train_id']);
        return $this->render('payment', [
            'train' => $train
        ]);
    }
}
?>


