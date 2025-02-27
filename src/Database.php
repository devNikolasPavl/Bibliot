<?php

require_once 'Config.php';

class Database 
{

    private static $db;
    private $pdo;

    private function_construct() {
        try {
            $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            echo 'Ошибка при подключении к базе данных: '.$e->getMessage();
        }
    }

    public static function getDBO() {
        if (!self::$db) self::$db = new Database();
        return self::$db;

    }

}
?>