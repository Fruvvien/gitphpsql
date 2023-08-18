<?php
include_once "Connection.php";

class Queries{

    private $db;

    function __construct(){
        $this->db=new Connection();
    }

    function userList(){
        $sql=$this->db->conn->prepare("SELECT * FROM users");
        $sql->execute();
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function registerList($userName, $email, $password){
        $sql= $this->db->conn->prepare("INSERT INTO users(user_name, password, email) VALUES(:userName, :email, :password)");
        $sql->bindValue(":userName", $userName);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", $password);
        $result= $sql->execute();
        return $result;
    }

}