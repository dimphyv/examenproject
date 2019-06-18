<?php
require_once 'function.php';
require 'db.php';
require 'users.php';
session_start();
$_SESSION['newUserStatus'] = null;
$returnPage = isSet($_SESSION['returnPage']) ? $_SESSION['returnPage'] : 'index.php' ;

// geklikt op de anuleren-knop --> terug naar de 'returnPage'
if(isset($_POST['cancel']))
{
    relocator($returnPage);
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
  }
}
relocator($returnPage);