<?php

class Database{
    // specify your own database credentials
    private $host = "eu-cdbr-west-01.cleardb.com";
    private $db_name = "heroku_5b996654482468a";
    private $username = "b11327676eab99";
    private $password = "c5ab036d";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

function OpenCon()
{


    $servername = "eu-cdbr-west-01.cleardb.com";
    $username = "b11327676eab99";
    $password = "c5ab036d";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=heroku_5b996654482468a", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //   echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    return $conn;

}

function CloseCon($conn)
{
    $conn = null;
}

?>