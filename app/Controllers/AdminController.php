<?php
namespace App\Controllers;

use App\Models\AdminTables;
use Ziada\Mvc\Controllers\AbstractContoller;

class AdminController extends AbstractContoller
{
  private $tableObj;
  private $tableName;
  private function defineTable($tablename){
    $this->tableName = $tablename;
    $this->tableObj = new AdminTables($this->tableName);
  }
  public function showAdmin_UsersTable(){
    $this->defineTable("users");
    $check = $this->checkAdminLogin();
    if($check === true){
        $users = $this->getData();
        return $this->render('adminUserTable',['users' => $users]);
      }
      return $check;
    }
    public function showAdmin_TrainsTable(){
      $this->defineTable("trains");
      $check = $this->checkAdminLogin();
      if($check === true){
          $trains = $this->getData();
          return $this->render('adminTrainsTable',['trains' => $trains]);
        }
        return $check;
    }
    public function getData(){
      $data =  $this->tableObj->retriveData();
      return $data;
    }
    public function deleteData()
    {
      $this->get_Table_Name_From_URL();
      $id = $_GET['id'] ?? null;
      if ($id) {
          $this->tableObj->deleteData($id);
          header("Location: /$this->tableName");
          exit();
      }
      return $this->render('admin');
    }

    public function updateData(){
      $this->get_Table_Name_From_Form();
      if(isset($_POST["savedChanges"])){
        $data = $_POST;
        // remove savedchanges key & id & tablename
        unset($data['savedChanges']);
        unset($data['id']);
        unset($data['table']);
        $this->tableObj->updateData($data);
        header("Location: /$this->tableName");
        exit();
      }
      return $this->render('admin');
    }

    public function addData(){
      $this->get_Table_Name_From_Form();
      if(isset($_POST["addNew"])){
        $data = $_POST;
        // remove addNew key
        unset($data['addNew']);
        unset($data['id']);
        unset($data['table']);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->tableObj->addData($data);
        header("Location: /$this->tableName");
        exit();
      }
      return $this->render('admin');
    }

    public function get_Table_Name_From_Form(){
      $table = $_POST["table"] ?? null;
      if($table){
        $this->defineTable($table);
      }
    }

    public function get_Table_Name_From_URL(){
      $urlPath = $_SERVER["REQUEST_URI"];
      $pathArr = explode("/",$urlPath);//["","delete","users","1"]
      $tableName = $pathArr[2] ?? null;
      if($tableName){
        $this->defineTable($tableName);
      }
    }

    
    
}
?>


