<?php
require_once 'users.php';
require_once 'function.php';
$user_id = $_GET['user_id'];

//var_dump($user_id);
$user = new users();
$user->deleteDataById('users', $user_id);

 relocator('leden.php'); ?>
  

