<?php
// if not load continue with code
require_once 'function.php';

require_once 'db.php';


class eventsusers extends db
{
    private $event_id, $user_id;
    
    
    public function getEventUsers($table = null, $event_id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE evenement_id='".$event_id."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
        //var_dump($result);
        
    }

    function existEventUser($table = null, $event_id = null, $user_id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE evenement_id='".$event_id."' AND user_id='".$user_id."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return count($stmt->fetchAll())>0;
    }

    function inschrijven($table = null, $event_id = null, $user_id = null){
        $a = "INSERT INTO ".$table." (evenement_id, user_id) VALUES ('".$event_id."','".$user_id."')";
        var_dump($a);
        //die();
        $stmt = $this->conn->prepare($a); 
        $stmt->execute();

    }
    function uitschrijven($table = null, $event_id = null, $user_id = null){
        $a = "DELETE FROM ".$table." WHERE evenement_id='".$event_id."' AND user_id='".$user_id."'";
//        DELETE FROM table_name WHERE condition;

        //var_dump($a);
        //die();
        $stmt = $this->conn->prepare($a); 
        $stmt->execute();

    }
}


