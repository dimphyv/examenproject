<?php
// if not load continue with code
require_once 'function.php';
// if not load, stop programm
require 'db.php';
require 'users.php';
session_start();
var_dump($_SESSION);
//die();
$_SESSION['newUserStatus'] = null;
$returnPage = isSet($_SESSION['returnPage']) ? $_SESSION['returnPage'] : 'index.php' ;
//var_dump($returnPage);
//die();
var_dump($_POST);
//die();
if(isset($_POST['cancel']))
{
    relocator('leden.php');
} 
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['naam']) AND isset($_POST['email']) AND isset($_POST['password']))
  {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = new users();
    $newuser = $user->insertData('users',$email, $naam, 0, $password);
    $_SESSION['newUserStatus'] = array('added','Bedankt voor uw aanmelding, u ontvangt binnenkort een email als u goedgekeurd bent.');
    //header('Location: new_user_melding.php');
    //relocater('evenementen.php');
/*
    if($userFound) {
      relocator('evenementen.php');
    } else {
      $_SESSION['status'] = array('failed','Wrong email or password');
      relocator('newuser.php');
    }
    */
  }else //relocator('newuser.php');
  {//header('Location: newuser.php')
  }
}
header('Location: '.$returnPage);