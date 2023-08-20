<?php
include_once "Queries.php";

$queries= new Queries();


if(isset($_POST["action"]) && $_POST["action"] == "userList"){
  echo json_encode($queries->userList());
}

if(isset($_POST["action"]) && $_POST["action"] == "register" && $_POST["allDatasKey"]){
 echo ($queriesRegister= $queries->registerList($_POST["allDatasKey"]["userName"], $_POST["allDatasKey"]["email"], $_POST["allDatasKey"]["password"])) ;
}

if(isset($_POST["action"])&& $_POST["action"] == "deleteUser" && isset($_POST["userIdKey"])){
  echo($queriesDeleteUser = $queries->deleteUser($_POST["userIdKey"]));
}

if(isset($_POST["action"])&& $_POST["action"] == "updateList" && isset($_POST["datasKey"]) && isset($_POST["userIdKey"])){
  $queriesUpdateUser= $queries->updateUser($_POST["datasKey"]["userName"], $_POST["datasKey"]["email"], $_POST["userIdKey"]);
  echo json_encode($queriesUpdateUser);
}

if(isset($_POST["action"]) && $_POST["action"] == "logining" && isset($_POST["usersDataKey"])){
  $queriesLogin= $queries->loginUser($_POST["usersDataKey"]["email"], $_POST["usersDataKey"]["passw"]);
  if(!empty($queriesLogin)){
    echo json_encode(["success" => true, "user" => $queriesLogin]);
  }else{
    echo json_encode(["success" => false, "user" => $queriesLogin]);
  }
}