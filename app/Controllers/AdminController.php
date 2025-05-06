<?php
namespace App\Controllers;
use App\Models\AdminTables;
use Ziada\Mvc\Controllers\AbstractContoller;

class AdminController extends AbstractContoller
{
  private $tableObj;
  private $tableName;
  private $notifications;
  private function defineTable($tablename){
    $this->tableName = $tablename;
    $this->tableObj = new AdminTables($this->tableName);
  }

  public function showNotifications(){
    $notifTable = new AdminTables("notifications");
    $this->notifications= $notifTable->retriveData();
  }
    public function createNotification($id,$table_name,$action_happened){
      $table = new AdminTables($table_name);
      $message="";
      $title="";
      $type="";
      $is_admin_only=1;
      if($action_happened === "Add"){
        $type = "success"; 
        switch ($table_name) {
          case 'users':
            $data =$table->getLastRowAdded();
            $title.="New User";
            $message.="New User Created Email : ".$data["email"] ;
            break;
          case 'trains':
            $data =$table->getLastRowAdded();
            $title.="New Train";
            $message.="New Train Created With Number : ".$data["train_number"];
            break;
          case 'stations':
            $is_admin_only=0;
            $data =$table->getLastRowAdded();
            $title.="New station";
            $message.="New station Added in City : ".$data["city"];
            break;
          case 'bookings':
            $title.="New Ticket";
            $message.="New Ticket Booked ";
            break;
        }
      }elseif($action_happened === "Delete"){
        $type="info";
        switch ($table_name) {
          case 'users':
            $data = $table->getOneRow($id);
            $title.="Delete User";
            $message.="Delete User with email : ".$data["email"];
            break;
          case 'trains':
            $data = $table->getOneRow($id);
            $is_admin_only=0;
            $title.="Delete Train";
            $message.="Delete train with number : ".$data["train_numebr"];
            break;
          case 'stations':
            $data = $table->getOneRow($id);
            $is_admin_only=0;
            $title.="Delete Station";
            $message.="Delete station with name :".$data["station_name"] ;
            break;
          case 'bookings':
            $data = $table->getOneRow($id);
            $title.="Cancel booking";
            $message.="Cancel Ticket with user ID :".$data["user_id"];
            break;
        }
      }elseif($action_happened === "Update"){
        $type="warning";
        switch ($table_name) {
          case 'users':
            $data = $table->getOneRow($id);
            $title.="Update User";
            $message.="Update User with email : ".$data["email"];
            break;
          case 'trains':
            $data = $table->getOneRow($id);
            $is_admin_only=0;
            $title.="Update Train";
            $message.="Update train with number : ".$data["train_number"];
            break;
          case 'stations':
            $data = $table->getOneRow($id);
            $is_admin_only=0;
            $title.="Update Station";
            $message.="Delete station with name :".$data["station_name"] ;
            break;
          case 'bookings':
            $data = $table->getOneRow($id);
            $title.="Update booking";
            $message.="Update Ticket with ID :".$data["id"];
            break;
        }
      }
      $notification = [
        "is_admin_only"=>$is_admin_only,
        "title"=>$title,
        "message"=>$message,
        "type"=>$type
      ];
      $notify = new AdminTables("notifications");
      $notify->addData($notification);
    }
    public function showAdmin_UsersTable(){
      $this->defineTable("users");
      $this->showNotifications();
      $check = $this->checkAdminLogin();
      if($check === true){
          $users = $this->getData();
          return $this->render('adminUserTable',['users' => $users,'notifications' => $this->notifications]);
        }
        return $check;
    }
    public function showAdmin_TrainsTable(){
      $this->defineTable("trains");
      $this->showNotifications();
      $check = $this->checkAdminLogin();
      if($check === true){
          $trains = $this->getData();
          return $this->render('adminTrainsTable',['trains' => $trains,'notifications' => $this->notifications]);
        }
        return $check;
    }
    public function showAdmin_StationsTable(){
      $this->defineTable("stations");
      $this->showNotifications();
      $check = $this->checkAdminLogin();
      if($check === true){
          $stations = $this->getData();
          return $this->render('adminStationsTable',['stations' => $stations,'notifications' => $this->notifications]);
        }
        return $check;
    }
    public function ShowBooking(){
      $this->defineTable("bookings");
      $this->showNotifications();
      $check = $this->checkAdminLogin();
      if($check === true){
          $bookings = $this->retriveBookingsData();
          return $this->render('adminBookingTable',['bookings' => $bookings,'notifications' => $this->notifications]);
        }
        return $check;
    }

    public function retriveBookingsData(){
      $data =  $this->tableObj->retriveBookings();
      return $data;
    }
    public function getData(){
      $data =  $this->tableObj->retriveData();
      return $data;
    }
    public function deleteData()
    {
      $id = $_GET["id"] ?? NULL;
      $this->get_Table_Name_From_URL();
      if ($id && $this->tableName!== "notifications") {
        $this->createNotification($id,$this->tableName,"Delete");  
        $this->tableObj->deleteData($id);
        header("Location: /$this->tableName");
        exit();
      }elseif($this->tableName=== "notifications"){
        $table = new AdminTables("notifications");
        $table->deleteData($id);
        header("Location: ".$_SERVER["HTTP_REFERER"]);
        exit();
      }
      return $this->render('admin');
    }

    public function updateData(){
      $this->get_Table_Name_From_Form();
      if(isset($_POST["savedChanges"])){
        $data = $_POST;
        $id = $data['id'];
        // remove savedchanges key & id & tablename
        unset($data['savedChanges']);
        unset($data['id']);
        unset($data['table']);
        $this->tableObj->updateData($data);
        $this->createNotification($id,$this->tableName,"Update");
        header("Location: /$this->tableName");
        exit();
      }
      return $this->render('admin');
    }

    public function addData(){
      $this->get_Table_Name_From_Form();
      if(isset($_POST["addNew"])){
        $data = $_POST;
        $table=$data['table'];
        // echo "<pre/>";
        // print_r($data);
        // remove unnecessary keys
        unset($data['addNew']);
        unset($data['id']);
        unset($data['table']);
        $this->tableObj->addData($data);
        $this->createNotification(NULL,$table,"Add");
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


