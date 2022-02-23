<?php
    // if there is no _config_, do not load this file
    if(!defined('_CONFIG_')) {
        exit('You do not have a config file');
    }
    define('ALLOW_FOOTER', true);
    // our config is below

    // Include the DB.php file
    include_once  "classes/DB.php";

    $con = DB::getConnection();
?>
