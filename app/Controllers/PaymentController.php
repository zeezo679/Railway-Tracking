<?php
namespace App\Controllers;

use App\Models\Train;
use App\Models\BookingRepository;
use Ziada\Mvc\Controllers\AbstractContoller;
use DateTime;
use App\Models\Station;

class PaymentController extends AbstractContoller
{
    protected BookingRepository $bookingRepo;

    public function __construct()
    {
        $this->bookingRepo = new BookingRepository();
    }

    public function ShowPay()
    {
        return $this->render('payment');
    }

    public function HandlePayment()
    {
        $trainId = $_POST['train_id'];
        $train = Train::Find($trainId);

        if (!$train) {
            return $this->render('payment', ['error' => 'Train not found.']);
        }

        $_SESSION['selected_train_id'] = $trainId;

        return $this->render('payment', ['train' => $train]);
    }

    public function HandlePaymentConfirmation()
    {
        if (isset($_SESSION['last_booking_id'])) {
            $bookingId = $_SESSION['last_booking_id'];
            $booking = $this->bookingRepo->find($bookingId);
            return $this->render('confirm', ['booking' => $booking]);
        }

        $trainId = $_SESSION['selected_train_id'] ?? null;
        $user = $_SESSION['user'] ?? null;

        if (!$trainId || !$user) {
            return $this->render('confirm', ['error' => 'Missing train or user information.']);
        }

        $train = Train::Find($trainId);

        if (!$train) {
            return $this->render('confirm', ['error' => 'Train not found.']);
        }

        $seatNumber = $this->assignSeat($trainId);
        $ticketCode = $this->generateTicketCode();
        $platNum = $this->generatePlatnum();

        $bookingData = [
            'user_id' => $user['id'],
            'firstName' => $user['firstName'],
            'ticketCode' => $ticketCode,
            'user_email' => $user['email'],
            'train_id' => $train['id'],
            'train_name' => $train['train_name'],
            'seat_number' => $seatNumber,
            'departure_station' => $train['departure_station'],
            'arrival_station' => $train['arrival_station'],
            'travel_date' => (new DateTime($train['departure_time']))->format('Y-m-d'),
            'class' => $train['train_class'],
            'status' => 'pending',
            'platform_number' => $platNum,
            'departure_time' => $train['departure_time'],
            'arrival_time' => $train['arrival_time'],
        ];

        $bookingId = $this->bookingRepo->create($bookingData);
        $_SESSION['last_booking_id'] = $bookingId;
        $booking = $this->bookingRepo->find($bookingId);

        Station::importFromTrains();

        return $this->render('confirm', ['booking' => $booking]);
    }

    private function assignSeat($trainId)
    {
        $rows = ['A', 'B', 'C', 'D', 'E'];
        $numbers = range(0, 9);
        return $rows[array_rand($rows)] . $numbers[array_rand($numbers)];
    }

    private function generateTicketCode()
    {
        $letters = '';
        for ($i = 0; $i < 3; $i++) {
            $letters .= chr(random_int(65, 90)); // A-Z
        }
        $digits = str_pad(strval(random_int(0, 99)), 2, '0', STR_PAD_LEFT);
        return $letters . $digits;
    }

    private function generatePlatnum()
    {
        return random_int(1, 200);
    }
}
