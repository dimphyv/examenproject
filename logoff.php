<?php
// if not load continue with code
//functie relocator inladen via function.php
include_once 'function.php';
//uitloggen, cookie reset
setcookie("usercheckedid",null,time());
setcookie("userIsAdmin", null, time());
$_SESSION['status'] = null;
relocator('index.php');