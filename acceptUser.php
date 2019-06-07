<?php
require_once 'users.php';
require_once 'function.php';
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 0;

// lid wordt toegelaten
$user = new users();
$user->wijzig_toelating('users', $user_id, 1);
relocator("leden.php");
