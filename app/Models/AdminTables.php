<?php
namespace App\Models;

use App\Database\DB;

class AdminTables{
  protected $db;
  protected $tableName;
  public function __construct($tableName){
    $this->tableName = $tableName;
    $this->db = new DB($this->tableName);
  }

  public function retriveData(){
    try{
      $data = $this->db
              ->select()
              ->fetchAll();
      return $data;
    }catch(\Exception $e){
      echo "Error : " . $e->getMessage();
    }
    return [];
  }

  public function getLastRowAdded(){
    $row = $this->db
                ->select()
                ->orderBy("id")
                ->getRow();
    return $row;
  }
  public function getOneRow($id){
    $row = $this->db
                ->select()
                ->where("id","=",$id)
                ->getRow();
    return $row;
  }
  public function retriveBookings(){
    $columns = "bookings.id AS id,
    users.id AS user_id,
    users.firstName AS firstName,
    users.email AS user_email,
    trains.id AS train_id,
    trains.train_name AS train_name,
    trains.train_number,
    departure_station.station_name AS departure_station,
    arrival_station.station_name AS arrival_station,
    bookings.travel_date,
    bookings.platform_number,
    trains.departure_time,
    trains.arrival_time,
    bookings.seat_number,
    bookings.class,
    bookings.status"; 
    try{
      $data = $this->db
              ->select($columns)
              ->join("users","user_id","id")
              ->join("trains","train_id","id")
              ->join("stations","departure_station_id","id","departure_station")
              ->join("stations","arrival_station_id","id","arrival_station")
              ->orderBy("id")
              ->fetchAll();
              return $data;
    }catch(\Exception $e){
      echo "Error : ".$e;
    }
    return [];
  }
  public function deleteData($id){
    try{
      $this ->db
            ->delete()
            ->where("id","=",$id)
            ->excute();
    }catch(\Exception $e){
      echo "Error : " . $e->getMessage();
    }
  }
  public function getEditedData($id){
    $user = $this ->db
          ->select()
          ->where("id","=",$id)
          ->getRow();
          return $user;
  }
  public function updateData($data){
    $id = (int) $_POST["id"];
    if($this->tableName === "bookings"){
      $allowedFields = [
        'seat_number',
        'platform_number',
        'travel_date',
        'class',
        'status'
      ];
      $data = array_filter(
        $data,
        fn($key) => in_array($key, $allowedFields),
        ARRAY_FILTER_USE_KEY
      );
    }
    try{
      $this ->db
            ->update($data)
            ->where("id","=",$id)
            ->excute();
    }catch(\Exception $e){
      echo "Error : " . $e->getMessage();
    }
  }
  public function addData($data){
    try{
      $this ->db
            ->insert($data)
            ->excute();
    }catch(\Exception $e){
      echo "Error : " . $e->getMessage();
    }
  }
}
?>