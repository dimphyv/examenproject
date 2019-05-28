<?php
require_once 'db.php';
//events objecten maken gebruik van database connectie object db, daarom extends en file import
class events extends db
{
    //attributen van object events
    private $event_id, $omschrijving, $datum, $geanulleerd;
    
    //vraag alle evenementen op
    public function getAllData($table = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
        //var_dump($result);
        
    }
    //vraag evenement op door een id mee te geven
    public function getDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE task_id =".$id); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        var_dump($result);
    }
    //verwijder evenement door meegeven van id
    public function deleteDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE task_id =".$id); 
        $stmt->execute();
    }
   // public function insertData($table = null, $omschrijving = null, $datum, $geanulleerd = 0){
    //    $stmt = $this->conn->prepare("INSERT INTO ".$table."('omschrijving',  VALUES)
   //}
}