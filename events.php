<?php

require_once 'db.php';


class events extends db
{
    private $event_id, $omschrijving, $datum, $geanulleerd;
    
    
    public function getAllData($table = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
        //var_dump($result);
    }

     //vraag evenement op door een id mee te geven
     public function getDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE evenement_id ='".$id."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $events = $stmt->fetchAll();
        return $events[0];
    }

    //verwijder evenement door meegeven van id
    public function deleteDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE task_id =".$id); 
        $stmt->execute();
    }
   
    public function insertData($table = null, $datum, $omschrijving = null){
        $a = "INSERT INTO ".$table." (`datum`, `omschrijving`) VALUES ('".$datum."','".$omschrijving."')";
        $stmt = $this->conn->prepare($a);
        $stmt->execute();
    }

    public function updateData($table = null, $datum, $omschrijving = null, $id = null){
        $a = "UPDATE ".$table." SET `datum` = '".$datum."', `omschrijving` = '".$omschrijving."' WHERE evenement_id = ".$id."";
        var_dump($a);
        //die();
        $stmt = $this->conn->prepare($a);
        $stmt->execute();
}

}


