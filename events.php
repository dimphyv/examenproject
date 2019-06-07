<?php

require_once 'db.php';

class events extends db
{
    private $event_id, $omschrijving, $datum, $geanulleerd;
    
    // opvragen alle events
    public function getAllData($table = null){
        $a = date('Y-m-d');
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE datum >= '".$a."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

     // vraag evenement op door een id mee te geven
     public function getDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE evenement_id ='".$id."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $events = $stmt->fetchAll();
        return $events[0];
    }

    // verwijder evenement door meegeven van id
    public function deleteDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE task_id =".$id); 
        $stmt->execute();
    }
   
    // Invoegen nieuw event
    public function insertData($table = null, $datum, $omschrijving = null){
        $stmt = $this->conn->prepare("INSERT INTO ".$table." (`datum`, `omschrijving`) VALUES ('".$datum."','".$omschrijving."')");
        $stmt->execute();
    }

    // updaten van gestaand event adhv id
    public function updateData($table = null, $datum, $omschrijving = null, $id = null){
        $stmt = $this->conn->prepare("UPDATE ".$table." SET `datum` = '".$datum."', `omschrijving` = '".$omschrijving."' WHERE evenement_id = ".$id."");
        $stmt->execute();
    }

}


