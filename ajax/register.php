<?php
//allow the config
define('_CONFIG_', true);
//Require config
require_once "../inc/config.php";



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Always return Json Format
    header('Content-Type: application/json');

    $return = [];
    //make sure the user does not exist
    // make sure the user CAn be addes AND is added
    // Return the proper info back to JS to redirect

    $return['redirect'] = '/dashboard.php';
    $return['name'] = "Giannis Tokou";

    echo json_encode($return, JSON_PRETTY_PRINT); exit;

} else {
    // Kill the script- redirect the user
    exit('test');
}

?>

