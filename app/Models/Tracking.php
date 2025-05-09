<?php
namespace App\Models;

use App\Database\DB;
use Ziada\Mvc\Controllers\AbstractContoller;

class Tracking
{
    
    public function getBookingDetails($booking_id)
    {
        $db = new DB('bookings');
        $booking = $db->select()
        ->where('id', '=', $booking_id)
        ->getRow();

        if(!$booking)
        {
            return null;
        }

        return
        [
            'train_id' => $booking['train_id'],
            'departure_station_name' => $booking['departure_station'],
            'arrival_station_name' => $booking['arrival_station'],
        ];
    }
}