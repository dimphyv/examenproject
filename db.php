<?php

class db 
{
    protected $host, $username, $password, $dbname;
    public $conn;

    public function __construct($host = "localhost", $username = "root", $password = "", $dbname = "club")
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
}