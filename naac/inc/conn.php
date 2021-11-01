<?php
// error_reporting(0);
// error_reporting(E_ALL);
// ini_set('display_errors', 0);
date_default_timezone_set("Asia/Calcutta");

function codb()
{
    $dbhost = 'localhost';
    $dbuser = 'counter';
    $dbpass = 'counter';
    $db = 'counter';
    $connc = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("could not connect to mysql");
    if (!$connc) {
        die('Could not connect: ' . mysqli_error($connc));
    }
    return $connc;
}

function locdb()
{
    $dbhost = 'localhost';
    $dbuser = 'website';
    $dbpass = 'website';
    $db = 'kasc';


    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("could not connect to mysql");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    return $con;
}

?>