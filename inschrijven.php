<?php
require_once 'function.php';
require_once 'eventsusers.php';
require_once 'db.php';
cookieStillAlive();
$eventuser = new eventsusers();
$eventuser->inschrijven('evenementuser',$_GET['event_id'],$_GET['user_id']);
relocator('evenementen.php');