<?php
class Connection{

    private $dsn ='mysql:host=localhost;dbname=gyakorlas;charset=UTF8';
    private $user="root";
    private $passw="";
    public $conn;


    function __construct(){
        try{
            $this->conn=new PDO($this->dsn, $this->user, $this->passw);
        }catch(PDOExpection $e){
            echo $e;
        }
    }


}