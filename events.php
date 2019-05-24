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
}
