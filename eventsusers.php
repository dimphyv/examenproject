<?php
// if not load continue with code
require_once 'function.php';
require_once 'db.php';

class eventsusers extends db
{
    private $event_id, $user_id;
    
    // opvragen van alle deelnemers aan een evenement
    public function getEventUsers($table = null, $event_id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE evenement_id='".$event_id."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    // is het lid ingeschreven voor een evenement ?
    function existEventUser($table = null, $event_id = null, $user_id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE evenement_id='".$event_id."' AND user_id='".$user_id."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return count($stmt->fetchAll())>0;  // aantal groter dan 0 --> is ingeschreven
    }
    
    // Een lid inschrijven voor een bepaald evenement
    function inschrijven($table = null, $event_id = null, $user_id = null){
        $stmt = $this->conn->prepare("INSERT INTO ".$table." (evenement_id, user_id) VALUES ('".$event_id."','".$user_id."')"); 
        $stmt->execute();
    }

    // Een lid uitschrijven voor een bepaald evenement
    function uitschrijven($table = null, $event_id = null, $user_id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE evenement_id='".$event_id."' AND user_id='".$user_id."'"); 
        $stmt->execute();
    }
}


