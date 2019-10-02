<?php

namespace App\Model\Database;

use PDO;

class Database {
    private static $pdo = null;

    public static function getDB(){
        if (!self::$pdo){
            self::$pdo =  new PDO('mysql:host='. DB_HOST . ';dbname=' . DB_NAME. ';charset=utf8', DB_USER, DB_PASSWORD, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }
        return self::$pdo ;
    }
}