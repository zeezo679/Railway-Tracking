<?php
namespace App\Models;

use App\Database\DB;
use Ziada\Mvc\Controllers\AbstractContoller;

class Station
{
    public static function all()
    {
        $db = new DB("stations");
        return $db->select()->fetchAll();
    }

    public static function active()
    {
        $db = new DB('stations');
        $stations = $db->select()
                    ->where('status', '=', 'active')
                    ->orderBy('id') 
                    ->fetchAll();
        return $stations;
    }

    public static function importFromTrains()
    {
        $db = new DB('trains');
        $departures = $db->select('departure_station AS station_name')->fetchAll();
        $arrivals = $db->select('arrival_station AS station_name')->fetchAll();

        $allStations = array_merge($departures, $arrivals);
        $uniqueStations = [];
        foreach ($allStations as $row) {
            $uniqueStations[$row['station_name']] = true;
        }
        $uniqueStations = array_keys($uniqueStations);

        $dbStations = new DB('stations');
        foreach ($uniqueStations as $stationName) {
            $exists = $dbStations->select()
                ->where('station_name', '=', $stationName)
                ->getRow();
            if (!$exists) {
                $dbStations->insert(['station_name' => $stationName])->excute();
            }
        }
    }
}
?>


