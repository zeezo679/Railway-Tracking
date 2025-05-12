<?php
namespace App\Controllers;

use App\Models\Station;
use App\Models\Train;
use App\Models\BookingRepository;
use Ziada\Mvc\Controllers\AbstractContoller;
use Ziada\Mvc\Http\Response;

class BookingController extends AbstractContoller
{
    protected $bookingRepo;

    public function __construct()
    {
        $this->bookingRepo = new BookingRepository();
    }

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
            'class' => $_POST['class-type'],
            'jtype' => $_POST['journey-type']
        ];

        header('Location: /selecttrains');
        exit;
    }

    public function ShowSelectTrains()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $from = $_SESSION['booking']['journeyFrom'];
        $to = $_SESSION['booking']['journeyTo'];
        $class = $_SESSION['booking']['class'];
        $num_passengers = $_SESSION['booking']['num_passengers'];

        $trains = Train::all();

        foreach ($trains as &$train) {
            $train['ticket_cost'] = ($train['train_class'] === 'first') ? 45 * $num_passengers : 30 * $num_passengers;
            $train['service_cost'] = 9.00;
        }
        unset($train);

        if (empty($trains)) {
            return $this->render('select_train', [
                'trains' => [],
                'no_trains_message' => "There are no active trains/journeys right now!"
            ]);
        }

        return $this->render('select_train', [
            'trains' => $trains,
        ]);
    }

    public function ShowPayment()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $num_passengers = $_SESSION['booking']['num_passengers'];
        $class = $_SESSION['booking']['class'];

        $ticket_cost_per_person = ($class === 'first') ? 45 : 30;
        $service_cost = 9.00;

        $ticket_cost = $ticket_cost_per_person * $num_passengers;
        $total_cost = $ticket_cost + $service_cost;

        $_SESSION['booking']['ticket_cost'] = $ticket_cost;
        $_SESSION['booking']['service_cost'] = $service_cost;
        $_SESSION['booking']['total_cost'] = $total_cost;

        return $this->render('select_train', [
            'ticket_cost' => $ticket_cost,
            'service_cost' => $service_cost,
            'total_cost' => $total_cost,
            'num_passengers' => $num_passengers,
            'class' => $class
        ]);
    }

    // New method that uses the BookingRepository to save the booking
    public function ConfirmBooking()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $bookingData = [
            'user_id' => $_SESSION['user']['id'],
            'firstName' => $_SESSION['user']['name'],
            'user_email' => $_SESSION['user']['email'],
            'ticketCode' => uniqid('TCKT_'),
            'train_id' => $_SESSION['booking']['train_id'] ?? 1,
            'train_name' => $_SESSION['booking']['train_name'] ?? 'Train A',
            'departure_station' => $_SESSION['booking']['journeyFrom'],
            'arrival_station' => $_SESSION['booking']['journeyTo'],
            'travel_date' => $_SESSION['booking']['journeyDate'],
            'seat_number' => 'A1',
            'class' => $_SESSION['booking']['class'],
            'status' => 'confirmed',
            'platform_number' => rand(1, 10),
            'departure_time' => $_SESSION['booking']['departure_time'] ?? '09:00',
            'arrival_time' => $_SESSION['booking']['arrival_time'] ?? '11:00',
        ];

        $bookingId = $this->bookingRepo->create($bookingData);

        return $this->render('booking_success', [
            'bookingId' => $bookingId,
            'ticketCode' => $bookingData['ticketCode']
        ]);
    }
}
