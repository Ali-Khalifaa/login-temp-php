<?php
session_start();

// dp
$username = 'ali';
$password = "123456" ;


if ($username == $_POST['username'] && $password == $_POST['password']) {
    $_SESSION['userdata'] = $_POST['username'];
    header("LOCATION:home.php");
}else{
    header("LOCATION:index.html");
}