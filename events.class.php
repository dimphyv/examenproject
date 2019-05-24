<?php

class events extends db_connect
{
    private $event_id, $omschrijving, $datum, $geanulleerd;
    
    public function __construct($evenement_id, $omschrijving, $datum, $geanulleerd)
    {
        $this->evenement_id = $event_id;
        $this->omschrijving = $omschrijving;
        $this->datum = $datum;
        $this->geanulleerd = $geanulleerd;
    }
    public function getAllData($table = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        var_dump($result);
    }
}
