<?php
//include_once("controller/UserController.php");
//$controller = new UserController();
//$controller->invoke();

include_once 'Config/Database.php';

 $db=new \Config\Database();

 var_dump($db->connect());