<?php
include_once "Queries.php";

$queries= new Queries();


if(isset($_POST["action"]) && $_POST["action"] == "userList"){
  echo json_encode($queries->userList());
}

if(isset($_POST["action"]) && $_POST["action"] == "register" && $_POST["allDatasKey"]){
 echo ($queriesRegister= $queries->registerList($_POST["allDatasKey"]["userName"], $_POST["allDatasKey"]["email"], $_POST["allDatasKey"]["password"])) ;
}

if(isset($_POST["action"])&& $_POST["action"] == "deleteUser" && $_POST["userIdKey"]){
  echo($queriesDeleteUser = $queries->deleteUser($_POST["userIdKey"]["id"]));
}