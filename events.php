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

    public function getDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE task_id =".$id); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        var_dump($result);
    }

    
    public function deleteDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE task_id =".$id); 
        $stmt->execute();
    }

   // public function insertData($table = null, $omschrijving = null, $datum, $geanulleerd = 0){
    //    $stmt = $this->conn->prepare("INSERT INTO ".$table."('omschrijving',  VALUES)
   //}
}
