<?php

namespace App\Models;

use App\Database\DB;

class User
{
    protected $db;
    private $table = "users";

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
      $userInfo = $this->db->select()
      ->where("email","=",$email)
      ->getRow();
      return $userInfo;
    }
}