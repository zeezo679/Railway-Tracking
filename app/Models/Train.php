<?php
namespace App\Models;

use App\Database\Connection;
use App\Database\DB;
use Ziada\Mvc\Controllers\AbstractContoller;

class Train
{
    public static function all()
    {
        $db = new DB("trains");
        return $db->select()->where('status', '=', 'active')->fetchAll();
    }

    public static function GetActiveTrains($from, $to, $class)
    {
        $db = Connection::getInstance();

        $sql = "SELECT * FROM trains
        WHERE status = 'active'
        AND departure_station = ?
        AND arrival_station = ?
        AND train_class = ?";

        $stmt = $db->prepare($sql);
        $stmt->bind_param('sss', $from, $to, $class); 
        $stmt->execute();
        $result = $stmt->get_result();
        $trains = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        return $trains;
    }

    public static function Find($trainId)
    {
        $db = new DB("trains");
        $train = $db->select()
        ->where("id","=",$trainId)
        ->getRow();
        return $train;
    }
}
?>


