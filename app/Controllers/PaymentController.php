<?php
namespace App\Controllers;

use App\Models\Booking;
use App\Models\Train;
use Ziada\Mvc\Controllers\AbstractContoller;
use DateTime;

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


        return $this->render('payment', [
            'train' => $train
        ]);
    }

    public function HandlePaymentConfirmation()
    {
        if (isset($_SESSION['last_booking_id'])) {
            $bookingId = $_SESSION['last_booking_id'];
            $booking = Booking::find($bookingId);
            return $this->render('confirm', ['booking' => $booking]);
        }

        $trainId = $_SESSION['selected_train_id'] ?? null;
        $userId = $_SESSION['user']['id'] ?? null;

        $train = $trainId ? Train::Find($trainId) : null;

        if (!$train) {
            return $this->render('confirm', ['error' => 'Train not found.']);
        }

        $seatNumber = $this->assignSeat($trainId);
        $ticketCode = $this->generateTicketCode();
        $platNum = $this->generatePlatnum();

        $bookingData =
        [
        
        'user_id' =>  $_SESSION['user']['id'],
        'firstName' =>  $_SESSION['user']['firstName'],
        'ticketCode' => $ticketCode,
        'user_email' =>  $_SESSION['user']['email'],
        'train_id' =>  $_SESSION['selected_train_id'],
        'train_name' => $train['train_name'],
        'seat_number' => $seatNumber,
        'departure_station' => $train['departure_station'],
        'arrival_station' => $train['arrival_station'],
        'travel_date' =>(new DateTime($train['departure_time']))->format('Y-m-d'),
        'class' => $train['train_class'],
        'status' => 'pending',
        'platform_number' => $platNum,
        'departure_time' => (new DateTime($train['departure_time']))->format('H:i'),
        'arrival_time' => (new DateTime($train['arrival_time']))->format('H:i'),
        ];

        $bookingId = Booking::create($bookingData);
        $_SESSION['last_booking_id'] = $bookingId;
        $booking = Booking::find($bookingId);


        return $this->render('confirm', [
            'booking' => $booking
        ]);
    }

    public function assignSeat($trainId)
    {
        $rows = ['A', 'B', 'C', 'D', 'E'];
        $numbers = ['0', '1', '2', '3', '4', '5', '6', '7','8','9'];
        $row = $rows[array_rand($rows)];
        $number = $numbers[array_rand($numbers)];
        $seatNumber = $row . $number;
        return $seatNumber;
    }

    public function generateTicketCode()
    {
        $letters = '';
        for ($i = 0; $i < 3; $i++) {
            $letters .= chr(random_int(65, 90)); // ASCII A-Z
        }
        $digits = str_pad(strval(random_int(0, 99)), 2, '0', STR_PAD_LEFT);

        return $letters . $digits;
    }

    public function generatePlatnum()
    {
        return random_int(1,200);
    }

    
}
?>


