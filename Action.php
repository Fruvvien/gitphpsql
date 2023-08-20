<?php
include_once "Queries.php";
session_start();
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
    if(!isset($_SESSION["userName"])){
      $_SESSION["userName"]=$queriesLogin[0]["user_name"];
    }
    echo json_encode(["success" => true, "user" => $queriesLogin]);
  }else{
    echo json_encode(["success" => false, "user" => $queriesLogin]);
  }
}

if(isset($_POST["action"]) && $_POST["action"] == "sessionIsExist"){
  if(isset($_SESSION["userName"]) && $_SESSION["userName"] != "" ){
    echo true;
  }else{
    echo false;
  }
}
