<?php
namespace App\Models;

use App\Database\DB;
use Ziada\Mvc\Controllers\AbstractContoller;

class ForgotPass extends AbstractContoller
{
    private $db = null;

    public function __construct()
    {
        $this->db = new DB('users');
    }


    public function EmailExists($email)
    {
        $row = $this->db
        ->select('email')
        ->where('email', '=', $email)
        ->getRow();

        return $row !== null;
    }

    public function ResetPassword($email, $newPassword)
    {
        $hashedPass = password_hash($newPassword, PASSWORD_DEFAULT);

        return $this->db
                    ->update(['password' => $hashedPass])
                    ->where("email", "=", $email)
                    ->excute();
    }
}
?>


