<?php

namespace Config;

class Database {
    const DB_HOST = 'localhost';
    const DB_NAME = 'mvc';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    private static function connect(){

        $pdo=new PDO("mysql:");
    }
}
