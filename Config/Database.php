<?php

namespace Config;
use PDO;

class Database {
    public static $host = 'localhost';
    public static $db = 'mvc';
    public static  $db_user = 'root';
    public static $pass = '';

    public  function connect(){

        $pdo=new PDO("mysql:host=".self::$host.";dbname=".self::$db.";charset=utf8".self::$db_user.",".self::$pass);

        return $pdo;
    }



}
