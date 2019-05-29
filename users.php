<?php

require_once 'db.php';



class users extends db
{
    private $user_id, $email, $naam, $toegelaten, $wachtwoord;
    
    //vraag alle users op uit de database
    public function getAllData($table = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
        //var_dump($result);
        
    }
    //vraag gegevens op , op basis van user id
    public function getDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE task_id =".$id); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        var_dump($result);
    }

    //vraag gegevens op , op basis van email
    public function getUserByEmail($table = null, $email = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE email =".$email); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }
    //een user verwijderen uit de database
    public function deleteDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE task_id =".$id); 
        $stmt->execute();
    }
    //nieuwe data aan database toevoegen
    public function insertData($table = null, $email, $naam, $toegelaten=0, $wachtwoord){
        $a ="INSERT INTO ".$table." (email, naam, toegelaten, wachtwoord) VALUES ('".$email."','". $naam."','". $toegelaten."','". $wachtwoord."')";
        var_dump($a);
        $stmt = $this->conn->prepare($a);
        $stmt->execute();
    }
    //toelating wijzigen, 0 is niet toegelaten, 1 is toegelaten
    public function wijzig_toelating($table, $user_id, $toegelaten){
        $stmt = $this->conn->prepare("UPDATE".$table."SET('toegelaten' = $toegelaten)");
        $stmt->execute();

    }
    //methode om gebruiker te wijzigen, geef tabel, naam, email, wachtwoord mee)
    public function alterUserData($table, $naam, $email, $wachtwoord){
        $stmt = $this->conn->prepare("UPDATE".$table."SET('naam'=$naam, 'email'=$email, 'wachtwoord'=$wachtwoord)");
        $stmt->execute();

    }

    //methode om wachtwoord en email te checken
    public function checkUser($table, $email, $wachtwoord){
        $user = $this->getUserByEmail($table, $email);
        if (count($user) > 0){
            return $user['wachtwoord']===$wachtwoord;
        }
        return false;


    }
}