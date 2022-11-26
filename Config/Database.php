<?php

namespace Config;

class Database {
    public static $host = 'localhost';
    public static $db = 'mvc';
    public static  $db_user = 'root';
    public static $pass = '';

    private static function connect(){

        $pdo=new PDO("mysql:host=".self::$host.";dbname=".self::$db.";charset=utf8".self::$db_user.",".self::$pass);
    }
}
