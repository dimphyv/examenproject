<?php

session_start();
require_once 'users.php';
require_once 'eventsusers.php';
require_once 'function.php';
cookieStillAlive();

var_dump($_POST);
if(isset($_POST['cancel']))
{
    relocator('leden.php');
}    
$users = new users();
$naam = $_POST['naam'];
$email = $_POST['email'];
$user_id = $_POST['user_id'];
$users = $users->alterUserData('users',$naam,$email,$user_id);
relocator('leden.php');
?>