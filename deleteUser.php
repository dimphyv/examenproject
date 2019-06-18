<?php
require_once 'users.php';
require_once 'function.php';
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 0;

// verwijderen van een lid/users adhv het user_id
$user = new users();
$user->deleteDataById('users', $user_id);

relocator('leden.php'); ?>
  

