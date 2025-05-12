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

}
