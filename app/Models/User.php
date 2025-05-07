<?php

namespace App\Models;

use App\Database\DB;

class User
{
    protected $db;
    protected $table = "users";

    public function __construct()
    {
        $this->db = new DB($this->table);
    }   
    public function register ($data){
      try{
        $this->db->insert($data)->excute();
      }catch(\Exception $e){
        echo "Error: " . $e->getMessage();
      }
    }
    public function getUserInfo($email){
      try{
        $userInfo = $this->db->select()
        ->where("email","=",$email)
        ->getRow();
        return $userInfo;
      }catch(\Exception $e){
        // echo "Error: " . $e->getMessage();
        return null;
      }
    }

    public function UpdatePassword($email, $hashedPassword)
    {
      try{
        $this->db->update([
          'password' => $hashedPassword
          ])->where('email', '=', $email)
          ->excute();
      }catch(\Exception $e){
        echo "Error: " . $e->getMessage();
      }
    }

    public function getNotificationsFromDB($id){
      $notify = $this->db
                      ->select()
                      ->join("notifications","id","user_id","Notify")
                      ->where("id","=",$id,"users")
                      ->fetchAll();
      return $notify;
    }

    public function getStationsFromDB(){
      $table = new DB("stations");
      $stations = $table->select()->fetchAll();
      return $stations;
    }
}