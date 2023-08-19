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
        $sql= $this->db->conn->prepare("INSERT INTO users(user_name, email, password ) VALUES(:userName, :email, :password)");
        $sql->bindValue(":userName", $userName);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", $password);
        $result= $sql->execute();
        return $result;
    }

    function deleteUser($id){
        $sql= $this->db->conn->prepare("DELETE FROM users WHERE id = :userIdKey");
        $sql->bindValue(":userIdKey", $id);
        $result= $sql->execute();
        return $result;
        

    }

}