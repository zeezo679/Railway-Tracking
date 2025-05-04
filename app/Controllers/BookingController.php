<?php
namespace App\Controllers;

use App\Models\Station;
use App\Models\Train;
use Ziada\Mvc\Controllers\AbstractContoller;
use App\Models\User;
use Ziada\Mvc\Http\Response;

class BookingController extends AbstractContoller
{
    public function ShowBooking()
    {
        $stations = Station::all();
        return $this->render('booking', ['stations' => $stations]);
    }

    public function HandleBookingForm()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    
        $_SESSION['booking'] = [
            'journeyFrom' => $_POST['q99_journeyFrom'],
            'journeyTo' => $_POST['q100_journeyTo'],
            'num_passengers' => $_POST['num_passengers'],
            'journeyDate' => $_POST['q15_departurejourneyDate'],
            
        ];

        return $this->ShowSelectTrains();
    }

    public function ShowSelectTrains()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $from = $_SESSION['booking']['journeyFrom'];
        $to = $_SESSION['booking']['journeyTo'];
        $trains = Train::GetActiveTrains($from, $to);
        return $this->render('select_train', ['trains' => $trains]);
    }
}
?>


