<?php
require_once 'users.php';

$user_id = $_GET['user_id'];

//var_dump($user_id);
$user = new users();
$user->wijzig_toelating('users', $user_id, 1);

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


</body>
</html>