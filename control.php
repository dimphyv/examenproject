<?php

// if not load continue with code
include_once 'function.php';

// if not load, stop programm
require 'db_connect.php';


session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['email']) AND isset($_POST['password']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    require 'db_getData.php';

    if($userFound) {
      relocator('welcome.php');
    } else {
      $_SESSION['status'] = array('failed','Wrong email or password');
      relocator('index.php');
    }
  }
}
