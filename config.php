<?php
include('inc/database.php'); // includes hidden database files
if(isset($_GET['c'])) {
    $c = $_GET['c'];
    if($c) {
        setcookie('accepted',true,time()+60*60*24*30,'/','.amethysthosting.co.uk');
    } else {
        setcookie('accepted',false,time()+60*60*24*30,'/','.amethysthosting.co.uk');
    }
    Header("Location: ".explode('?',$_SERVER['REQUEST_URI'])[0]);
}
session_start(); // starts session cookies for essential cookies
date_default_timezone_set('Europe/London'); // sets timezone
$conn = mysqli_connect(SQLHOST,SQLUSERNAME,SQLAUTH); // connects to database
$db = mysqli_select_db($conn, SQLDATABASE); // selects database
if(!isset($_COOKIE['accepted'])) {
    // If cookies have not been checked
    $_SESSION['cookies'] = false;
} elseif($_COOKIE['accepted'] == false) {
    // If cookies have not been allowed
    $_SESSION['cookies'] = false;
} else {
    // If cookies are allowed
    $_SESSION['cookies'] = true;
}
// Gets user IP
if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$tp = Array('score'=>'4.0','of'=>3)
?>