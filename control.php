<?php
// if not load continue with code
include_once 'function.php';
// if not load, stop programm
require_once 'db.php';
require_once 'users.php';
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['new']))
  {
    relocator('newuser.php');
  }
  elseif(isset($_POST['email']) AND isset($_POST['password']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new users();
    $userFound = $user->checkuser("users", $email, $password);
    if($userFound) {
      //header('Location: evenementen.php?user_id='.$user[0]['user_id']);
      relocator('evenementen.php');
    } else {
      $_SESSION['status'] = array('failed','Wrong email or password');
      relocator('index.php');
    }
  }
}