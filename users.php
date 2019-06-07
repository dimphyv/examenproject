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
    //vraag evenement op door een id mee te geven
    public function getDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE user_id ='".$id."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $users = $stmt->fetchAll();
        return $users[0];
    }
    //vraag gegevens op , op basis van email
    public function getUserByEmail($table = null, $email = null){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE email ='".$email."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }
    //een user verwijderen uit de database
    public function deleteDataById($table = null, $id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE user_id =".$id); 
        $stmt->execute();
    }
   
    //nieuwe data aan database toevoegen
    public function insertData($table = null, $email, $naam, $toegelaten=0, $wachtwoord){
        $a ="INSERT INTO ".$table." (email, naam, toegelaten, wachtwoord) VALUES ('".$email."','". $naam."','". $toegelaten."','". $wachtwoord."')";
        //var_dump($a);
        $stmt = $this->conn->prepare($a);
        try { 
             $stmt->execute();
            }catch (Exception $e){
                echo "";
              }
            
    }
    //toelating wijzigen, 0 is niet toegelaten, 1 is toegelaten
    public function wijzig_toelating($table, $user_id, $toegelaten){
       
        $stmt = $this->conn->prepare("UPDATE ".$table." SET toegelaten = $toegelaten  WHERE user_id = $user_id");
        $stmt->execute();
    }
    //methode om gebruiker te wijzigen, geef tabel, naam, email, wachtwoord mee)
    public function alterUserData($table = null, $naam, $email = null, $id = null){
        $a = "UPDATE ".$table." SET `naam` = '".$naam."', `email` = '".$email."' WHERE user_id = ".$id."";
        var_dump($a);
        //die();
        $stmt = $this->conn->prepare($a);
        $stmt->execute();
    }

     //methode om wachtwoord en email te checken
     public function checkUser($table, $email, $wachtwoord){
        $user = $this->getUserByEmail($table, $email);
        var_dump($user);
        //die();
        if (isset($user) && count($user)==1 && $user[0]['toegelaten']<>'0') {
            if ($user[0]['wachtwoord']===$wachtwoord)
            {
                setcookie("usercheckedid",$user[0]['user_id'],time()+600);
                return true;
            }
        }
        return false;
    }

        //vraag alle users op uit de database die meegaan met een evenement
    public function getEvenementData($table = null, $evenment_id = null){
       // $a = "SELECT users.user_id, users.naam, users.email, users.toegelaten FROM ".$table." join evenementuser  ON users.user_id=evenementuser.user_id where evenement_id='".$evenment_id."'";
        $stmt = $this->conn->prepare("SELECT users.user_id, users.naam, users.email, users.toegelaten FROM ".$table." join evenementuser  ON users.user_id=evenementuser.user_id where evenement_id='".$evenment_id."'"); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }


    
}