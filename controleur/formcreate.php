<?php

require_once("../modele/insertproject.php");




//Check informations form to create project
if (isset($_POST['title'], $_POST['status'], $_POST['description'], $_POST['deadline'])){
  $title = htmlspecialchars($_POST['title']);
  $status = htmlspecialchars($_POST['status']);
  $description = htmlspecialchars($_POST['description']);
  $deadline = htmlspecialchars($_POST['deadline']);

  insertProject($title, $status, $description, $deadline);

}

include"../vue/formcreateVue.php";
