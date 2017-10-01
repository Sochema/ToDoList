<?php

require_once("../modele/insertproject.php");



//Check informations form to create project
if (isset($_POST['title'], $_POST['status'], $_POST['description'])){
  var_dump($_POST);
  $title = htmlspecialchars($_POST['title']);
  $status = htmlspecialchars($_POST['status']);
  $description = htmlspecialchars($_POST['description']);

  insertProject($title, $status, $description);
  
}

include"../vue/formcreateVue.php";
