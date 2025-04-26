<?php
namespace App\Database;
use App\Database\Connection;

interface dbContract{
  public function insert($data);
  public function select($columns="*");
  public function update($data);
  public function delete();
  public function where($coulmn,$operator,$value);
  public function andWhere($coulmn,$operator,$value);
  public function getRow();
  public function excute();
  public function fetchAll();
}

class DB implements dbContract{
  private $table;
  private $sql;
  private $conn;
  
  public function __construct($table){
    $this->table=$table;
    $this->conn = Connection::getInstance();
    if ($this->conn->connect_error) {
      die("Database connection failed: " . $this->conn->connect_error);
    }
  }
  public function insert($data){
    $columns="";
    $values="";
    foreach ($data as $key => $value) {
      $columns.="`$key`,";
      $values.="'$value',";
    }
    // ? remove the last , exist
    $columns = rtrim($columns,",");
    $values = rtrim($values,",");
    $this->sql="INSERT INTO `$this->table` ($columns) VALUES ($values)";
    // ? return this to make the excution
    return $this;
  }
  public function select($columns="*"){
    $this->sql = "SELECT $columns FROM $this->table";
    // ? return this to make the excution
    return $this;
  }

  public function update($data){
    $rows = "";
    foreach ($data as $key => $value) {
      if(is_int($value)){
        $rows.="$key = $value,";
      }else{
        $rows.="$key = '$value',";
      }
    }
    $rows = rtrim($rows,",");
    $this->sql="UPDATE $this->table SET $rows";
    // ? return this to make the excution
    return $this;
  }
  public function delete(){
    $this->sql = "DELETE FROM $this->table";
    // ? to complete condition
    return $this;
  }
  public function where($coulmn,$operator,$value){
    $this->sql .=" WHERE $coulmn $operator '$value'";
    return $this;
  }
  public function andWhere($coulmn,$operator,$value){
    $this->sql .=" AND $coulmn $operator '$value'";
    return $this;
  }
  public function excute(){
    // echo "<br/>".$this->sql."<br/>";
    if(!mysqli_query($this->conn,$this->sql)){
      die("Failed to excute the query" . mysqli_error($this->conn));
    };
  }

  public function getRow(){
    $query = mysqli_query($this->conn,$this->sql);
    return mysqli_fetch_assoc($query);
  }
  public function fetchAll(){
    $query = mysqli_query($this->conn,$this->sql);
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
  }
}
?>