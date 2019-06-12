<?php
// if not load continue with code
session_start();
include_once 'function.php';
// if not load, stop programm
require_once 'db.php';
require_once 'users.php';

$_SESSION['status'] = null;
$_SESSION['newUserStatus'] = null;
$_SESSION['returnPage'] = 'index.php';
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
      //setcookie("usercheckedid",$user[0]['user_id'],time()+600);
      $_SESSION['status'] = null;
      relocator('evenementen.php');
    } else {
      $_SESSION['status'] = array('failed','Onbekend email/wachtwoord (of nog niet geaccepteerd)');
      //echo $_SESSION['status'];
      relocator('index.php');
    }
  }
}