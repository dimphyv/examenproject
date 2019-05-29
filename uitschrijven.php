<?php
require_once 'function.php';
require_once 'eventsusers.php';
require_once 'db.php';

var_dump($_GET);
$eventuser = new eventsusers();
$eventuser->uitschrijven('evenementuser',$_GET['event_id'],$_GET['user_id']);
relocator('evenementen.php');