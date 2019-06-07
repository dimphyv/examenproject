<?php
require_once 'users.php';
require_once 'function.php';
$user_id = $_GET['user_id'];

//var_dump($user_id);
$user = new users();
$user->wijzig_toelating('users', $user_id, 1);
relocator("leden.php");
