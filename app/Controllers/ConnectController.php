<?php
namespace App\Controllers;

use App\Models\Connect;
use Symfony\Component\Routing\RouteCollection;

class ConnectController
{
    // Homepage action
    public function connectDB()
    {
        $connect = new Connect();
        $connect->db_connect();

    }

    public function closeDB()
    {
        $connect = new Connect();
        $connect->db_close();

    }
}