<?php 

require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

class Conectar{
    public static function conexion()
    {   
        $host = getenv("DB_HOST");
        $username = getenv("DB_USERNAME");
        $password = getenv("DB_PASSWORD"); 
        $mysql = new mysqli($host, $username, $password, 't32_articulosrubros');

        if($mysql->connect_error)     return false;
        else                          return $mysql;
    }
}

?>