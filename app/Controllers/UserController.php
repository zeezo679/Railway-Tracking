<?php
namespace App\Controllers;

use App\Models\User;

class UserController extends AdminController
{
    protected $userModel;
    private $email;
    private $password;
    private $notifications = [];
    public function __construct(){
      $this->userModel = new User();
    }

    public function index()
    {
      $check = $this->checkUserLogin(); 
      if( $check === true){
        $this->getNotifications($_SESSION["user"]["id"]);
        return $this->render('/home',['notifications'=>$this->notifications]);
      }
      return $this->render('login');
    }
    public function register($data)
    {
      $this->email = $data["email"];
      $this->password = $data["password"];
      $this->userModel->register($data); 
    }
    public function getUserInfo()
    {
        return $this->userModel->getUserInfo($this->email);
    }
    public function getNotifications($id){
      $this->notifications = $this->userModel->getNotificationsFromDB($id);
    }
    public function findCity(){
      $stations = $this->userModel->getStationsFromDB();
      $stationCities = array_map(fn($station) => strtolower(trim($station['city'])), $stations);
      $message = "";
      $searchCity = strtolower(trim($_POST["city"]));
        if (in_array($searchCity, $stationCities)) {
            $message = "<span class='text-success fw-bold'>✅ We have stations in this city.</span>";
        } else {
            $message = "<span class='text-danger fw-bold'>❌ Sorry, no station found in this city.</span>";
        }
        return $this->render('/home', [
          'notifications' => $this->notifications,
          'message' => $message
      ]);
      
    } 
}