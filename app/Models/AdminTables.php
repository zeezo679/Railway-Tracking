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