<?php
// error_reporting(0);
// error_reporting(E_ALL);
// ini_set('display_errors', 0);
date_default_timezone_set("Asia/Calcutta");

function codb()
{
    $dbhost = '10.40.1.9';
    $dbport ='9308';
    $dbuser = 'root';
    $dbpass = 'root123';
    $db = 'counter';
    $connc = mysqli_connect($dbhost, $dbuser, $dbpass, $db,$dbport) or die("could not connect to mysql counterdb");
    if (!$connc) {
        die('Could not connect counter: ' . mysqli_error($connc));
    }
    return $connc;
}

function locdb()
{
    $dbhost = '10.40.1.9';
    $dbport ='9308';
    $dbuser = 'root';
    $dbpass = 'root123';
    $db = 'kasc';


    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $db, $dbport) or die("could not connect to mysql main db");
    if (!$con) {
        die('Could not connect: main db ' . mysqli_error($con));
    }
    return $con;
}

?>
