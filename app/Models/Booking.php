<?php
namespace App\Models;

use App\Database\DB;
use mysqli;
use Ziada\Mvc\Controllers\AbstractContoller;

class Booking
{
    public static function create($data)
    {
        $db = new DB('bookings');
        $db->insert($data)->excute();

        return mysqli_insert_id($db->conn);
    }

    public static function find($id)
    {
        $db = new DB('bookings');
        return $db->select('*')->where('id', '=', $id)->getRow();
    }
}
?>


