<?php
namespace App\Models;

use App\Database\DB;
use Ziada\Mvc\Controllers\AbstractContoller;

class Station
{
    public static function all()
    {
        $db = new DB("stations");
        return $db->select()->fetchAll();
    }
}
?>


