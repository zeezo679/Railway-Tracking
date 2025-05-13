<?php
namespace App\Models;

use App\Database\DB;

class BookingRepository
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB('bookings');
    }

    public function create($data)
    {
        $this->db->insert($data)->excute();
        return mysqli_insert_id($this->db->conn);
    }

    public function find($id)
    {
        return $this->db->select('*')->where('id', '=', $id)->getRow();
    }

    public function getBookingWithDetails($bookingId)
    {
        $result = $this->db
        ->select('bookings.*, users.firstName AS user_name, users.email AS user_email, trains.train_name, trains.departure_station, trains.arrival_station, trains.departure_time, trains.arrival_time, trains.train_class AS class')
        ->join('users', 'user_id', 'id')  
        ->join('trains', 'train_id', 'id') 
        ->where('bookings.id', '=', $bookingId)      
        ->fetchAll();

        return $result[0] ?? null;
    }

}
