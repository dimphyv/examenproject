<?php
session_start();

require_once 'events.php';
require_once 'eventsusers.php';
require_once 'function.php';
cookieStillAlive();

var_dump($_POST);
if(isset($_POST['cancel']))
{
    relocator('evenementen.php');
}    
$events = new events();
$omschrijving = $_POST['omschrijving'];
$datum = $_POST['datum'];
$evenement_id = $_POST['evenement_id'];
$evenementen = $events->updateData('evenementen',$datum,$omschrijving,$evenement_id);
relocator('evenementen.php');
?>