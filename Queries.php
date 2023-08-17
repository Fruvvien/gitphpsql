<?php
include_once "Connection.php";

class Queries{

    private $db;

    function __construct(){
        $this->db=new Connection;
    }

    function userList(){
        $sql=$this->db->conn->prepare("SELECT * FROM users");
        $sql->execute();
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}