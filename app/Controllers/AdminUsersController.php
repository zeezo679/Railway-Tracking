<?php
namespace App\Controllers;

use App\Models\AdminTables;
use Ziada\Mvc\Controllers\AbstractContoller;

class AdminUsersController extends AbstractContoller
{
  private $usersTable;
  public function __construct(){
    $this->usersTable = new AdminTables("users");
  }
  
  public function showAdmin_UsersTable()
    {
      $check = $this->checkAdminLogin();
      if($check === true){
        $users = $this->getUsersData();
        return $this->render('adminUserTable',['users' => $users]);
      }
      return $check;
    }
    public function getUsersData(){
      $data =  $this->usersTable->retriveData();
      return $data;
    }
    public function deleteData()
    {
      $id = $_GET['id'] ?? null;
      if ($id) {
          $this->usersTable->deleteData($id);
          header("Location: /users");
          exit();
      }
      $users = $this->getUsersData();
      return $this->render('adminUserTable', ['users' => $users]);
    }

    public function updateData(){
      if(isset($_POST["savedChanges"])){
        $data = [
          "firstName"=>$_POST["firstName"],
          "lastName"=>$_POST["lastName"],
          "email"=>$_POST["email"],
          "role"=>$_POST["role"],
          "account_Status"=>$_POST["account_Status"],
          "balance"=>$_POST["balance"],
        ];
        $this->usersTable->updateData($data);
        header("Location: /users");
        exit();
      }
      $users = $this->getUsersData();
      return $this->render('adminUserTable', ['users' => $users]);
    }

    public function addData(){
      if(isset($_POST["addNew"])){
        $data = [
          "firstName"=>$_POST["firstName"],
          "lastName"=>$_POST["lastName"],
          "email"=>$_POST["email"],
          "password"=>$_POST["password"],
          "role"=>$_POST["role"],
          "account_Status"=>$_POST["account_Status"],
          "balance"=>$_POST["balance"],
        ];
        $this->usersTable->addData($data);
        header("Location: /users");
        exit();
      }
      $users = $this->getUsersData();
      return $this->render('adminUserTable', ['users' => $users]);
    }
}
?>


