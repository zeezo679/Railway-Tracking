<?php
namespace App\Controllers;

use App\Models\User;

class UserController
{
    protected $userModel;
    private $email;
    private $password;
    public function __construct(){
      $this->userModel = new User();
    }
    public function register($data)
    {
      $this->email = $data["email"];
      $this->password = $data["password"];
      $this->userModel->register($data); 
    }
    public function getUserInfo()
    {
      echo "from user controller";
        return $this->userModel->getUserInfo($this->email,$this->password);
    }
}