<?php

// if not load continue with code
require_once 'function.php';

// if not load, stop programm
require 'db.php';
require 'users.php';


session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['naam']) AND isset($_POST['email']) AND isset($_POST['password']))
  {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = new users();
    $newuser = $user->insertData('users',$email, $naam, 0, $password);
    header('Location: evenementen.php');
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
  header('Location: newuser.php');
}
