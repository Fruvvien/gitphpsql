<?php
include_once "Queries.php";

$queries= new Queries();


if(isset($_POST["action"]) && $_POST["action"] == "userList"){
  echo json_encode($queries->userList());
}