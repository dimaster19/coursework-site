<?php
namespace App\Models;

class Connect
{
    // DB
    const SERVERNAME = "localhost";
    const USERNAME = "admin";
    const PASSWORD = "admin";
    const DBNAME = "MyShop";
    const PORT = "5432";
    public $dbConnection;

    public function db_connect()
    {
        $this->dbConnection = pg_connect("host=" . self::SERVERNAME . " port=" . self::PORT . " dbname=" . self::DBNAME . " user=" . self::USERNAME . " password=" . self::PASSWORD);

        if (!$this->dbConnection) {
            die("Ошибка подключения: " . pg_last_error());
        }
        else {
            return $this->dbConnection ;
        }
    }

    public function db_close(){
        pg_close($this->dbConnection);
    }
}
