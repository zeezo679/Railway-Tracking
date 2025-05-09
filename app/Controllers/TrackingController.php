<?php
namespace App\Controllers;

use App\Models\Booking;
use App\Models\Train;
use Ziada\Mvc\Controllers\AbstractContoller;
use DateTime;
use App\Database\DB;
use App\Helpers\JourneyHelper;
use App\Models\Station;
use App\Models\Tracking;
use Exception;

class TrackingController extends AbstractContoller
{
    private $trackingModel;
    private $stationModel;
    private $journeyHelper;

    public function __construct()
    {
        $this->trackingModel = new Tracking();
        $this->stationModel = new Station();
        $this->journeyHelper = new JourneyHelper();
    }

    public function ShowTrackingPage()
    {   
        $booking_id = $_SESSION['last_booking_id'];
        $bookingDetails = $this->trackingModel->getBookingDetails($booking_id);

        $departureStation = $bookingDetails['departure_station_name'];
        $arrivalStation = $bookingDetails['arrival_station_name'];
        $trainId = $bookingDetails['train_id'];

        $stations = $this->stationModel::active();
        $segments = $this->journeyHelper->getJourneySegment($stations, $departureStation, $arrivalStation,2,4,$trainId);

        if(!$bookingDetails)
            throw new Exception("Booking not found.");
        
        
        $segments = $this->journeyHelper->calculateTimeIntervals($segments, $trainId);
        
        return $this->render('tracking', [
            'segments' => $segments,
            'booking' => $bookingDetails
        ]);
    }


    
    
}
?>


