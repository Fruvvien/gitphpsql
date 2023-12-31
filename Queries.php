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
    function updateUser($userName, $email, $userId){
        $sql= $this->db->conn->prepare("UPDATE users SET user_name = :userName, email = :email WHERE id = :userId ");
        $sql->bindValue(":userName", $userName);
        $sql->bindValue(":email",  $email);
        $sql->bindValue(":userId", $userId);
        $result= $sql->execute();
        return $result;
    }
    
    function loginUser($email, $password){
        $sql= $this->db->conn->prepare("SELECT * FROM users WHERE email = :email AND password = :passw ");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":passw", $password);
        $sql->execute();
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}