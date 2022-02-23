<?php

// if there is no _config_, do not load this file
if(!defined('_CONFIG_')) {
    exit('You do not have a config file');
}
class DB {
    protected static $con;

    private function __construct() {
        try{
            self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=3307;dbname=login_course', 'root', 'root');
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
        } catch (PDOException $e) {
            echo "could not connect to Database"; exit;
        }
    }
    public static function getConnection() {

        if (!self::$con) {
            new DB();
        }
        return self::$con;
    }
}
?>
