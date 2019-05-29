<?php
// if not load continue with code
include_once 'function.php';

setcookie("usercheckedid",null,time());
$_SESSION['status'] = null;
relocator('index.php');