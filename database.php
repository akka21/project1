<?php

Class DB
{
    private $Host; 
    private $username;
    private $password;
    private $database;
    private $charset;
    private $db;


  public function __construct($Host, $username, $password, $database, $charset){

    $this->host = $host; //Localhost
    $this->username = $username; // Root name
    $this->password = $password;
    $this->database = $database;
    $this->charset = $charset;

    try{
        // DSN connection method
        /*
        - mysql driver
        - host (localhost/127.0.0.1)
        - database (schhema) name
        - charset
        */
        $dsn = ("mysql:host=$this-> host;dbname=$this->database;charset=$this->charset";
        $this->db = new PDO($dsn, $this->username, $this->password);
        echo "Database connection successfully established";

            //$this->connect = new PDO("mysql:host = this->host;dbname=..",this->username
        }catch(PDOException $e){
            echo $e->getMessage();
            exit("An error occurred");
        }
    
    }



    public function executeQueryExample({
        $sql = "SELECT * FROM account WHERE email=$email AND status=$status";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $statement->fetch();


        $sql = 'SELECT * FROM account WHERE email=? AND status=?';
        $statement = $this->db->prepare($query);
        $statement->execute([$email, $status]);
        $statement->fetch();


        $sql = 'SELECT * FROM account WHERE email=:email AND status=:status';
        $statement = $this->db->prepare($query);
        $statement->execute(['email' => $email, 'status' => $status]);
        $statement->fetch();
    }

}