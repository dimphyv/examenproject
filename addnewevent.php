<?php
//require_once 'db.php';
require_once 'events.php';
require_once 'eventsusers.php';
session_start();

if(isset($_POST['cancel']))
{
    relocator('evenementen.php');
}    
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $events = new events();
    if(isSet($_POST['omschrijving']) && isSet($_POST['datum']))
    {
        $omschrijving = $_POST['omschrijving'];
        $datum = $_POST['datum'];
        $evenementen = $events->insertData('evenementen',$datum,$omschrijving);
    }
}
relocator('evenementen.php');
