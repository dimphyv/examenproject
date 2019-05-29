<?php
// if not load continue with code
include_once 'function.php';
// if not load, stop programm
require_once 'db.php';
require_once 'users.php';

session_start();
<<<<<<< HEAD
$_SESSION['status'] = null;
=======
>>>>>>> dim
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
<<<<<<< HEAD
      $_SESSION['status'] = null;
=======
      //header('Location: evenementen.php?user_id='.$user[0]['user_id']);
>>>>>>> dim
      relocator('evenementen.php');
    } else {
      $_SESSION['status'] = array('failed','Wrong email or password');
      echo $_SESSION['status'];
      relocator('index.php');
    }
  }
}