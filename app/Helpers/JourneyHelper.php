<?php
namespace App\Helpers;
use App\Models\Train;

class JourneyHelper
{
    /**
     * Get the journey segment: departure, random intermediates, and arrival.
     */
    public function getJourneySegment(
        $stations,
        $departureName,
        $arrivalName,
        $minStops = 2,
        $maxStops = 5,
        $trainId = null
    )
    {
        $departureStation = null;
        $arrivalStation = null;
        $otherStations = [];


        foreach ($stations as $station) {
            if (strcasecmp(trim($station['station_name']), trim($departureName)) === 0) {
                $departureStation = $station;
            } elseif (strcasecmp(trim($station['station_name']), trim($arrivalName)) === 0) {
                $arrivalStation = $station;
            } else {
                $otherStations[] = $station;
            }
        }

        if (!$departureStation || !$arrivalStation) {
            throw new \Exception("Departure or arrival station not found.");
        }

        if ($trainId !== null) {
            srand(intval($trainId));
        }

        shuffle($otherStations);
        $numStops = min(count($otherStations), rand($minStops, $maxStops));
        $intermediateStations = array_slice($otherStations, 0, $numStops);

        $segment = array_merge([$departureStation], $intermediateStations, [$arrivalStation]);

        return $segment;
    }


    public function calculateTimeIntervals($segments, $trainId)
    {
        $train = Train::Find($trainId);

        $departureTime = $train['departure_time'];
        $arrivalTime = $train['arrival_time'];
        
        $segmentCount = count($segments);
        $startTime = strtotime($departureTime);
        $endTime = strtotime($arrivalTime);
        $totalDuration = $endTime - $startTime;

        if($segmentCount > 1)
        {
            $interval = $totalDuration / ($segmentCount - 1);
        } else 
        {
            $interval = 0;
        }

        foreach($segments as $i => &$station)
        {
            $stationTime = $startTime + ($i * $interval);
            $station['time'] = date('H:i', $stationTime);
        }

        unset($station);

        return $segments;
    }
}
