<?php
require_once 'users.php';
require_once 'function.php';
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 0;

// lid wordt toegelaten
$user = new users();
$user->wijzig_toelating('users', $user_id, 1);
relocator("leden.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geaccepteerd</title>
</head>
<body>
    <h3>Deelnemer geaccepteerd</h3>
<br>
    <a href="leden.php">Terug naar ledenlijst</a>


