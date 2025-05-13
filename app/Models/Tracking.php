<?php
namespace App\Models;

use App\Database\DB;
use Ziada\Mvc\Controllers\AbstractContoller;

class Tracking
{
    
    public function getBookingDetails($booking_id)
    {
        $db = new DB('bookings');
        $booking = $db->select('bookings.train_id, trains.departure_station AS departure_station_name, trains.arrival_station AS arrival_station_name')
        ->join('trains', 'train_id', 'id')
        ->where('bookings.id', '=', $booking_id)
        ->getRow();

        if (!$booking) {
            return null;
        }

        return $booking;
    }
}