<?php

require_once 'db.php';


class users extends db
{
    private $user_id, $email, $naam, $toegelaten, $wachtwoord;
    
    
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
}