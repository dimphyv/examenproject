<?php
require_once 'users.php';

$user_id = $_GET['user_id'];

var_dump($user_id);
$user = new users();
$user->deleteDataById('users', $user_id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deleted User</title>
</head>
<body>
    <h3>Deelnemer verwijderd</h3>


</body>
</html>