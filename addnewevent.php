<?php
//require_once 'db.php';
require_once 'events.php';
require_once 'eventsusers.php';
session_start();

var_dump($_POST);
if(isset($_POST['cancel']))
{
    relocator('evenementen.php');
}    
$events = new events();
$omschrijving = $_POST['omschrijving'];
$datum = $_POST['datum'];
$evenementen = $events->insertData('evenementen',$datum,$omschrijving);
relocator('evenementen.php');
?>