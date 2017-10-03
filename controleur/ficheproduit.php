<?php

require"../modele/get_product.php";

//DELETE project

if (isset($_GET['delete'])){
  delete();
}


// GET THE VALUE OF PROJECT ID
$article = get_id();

// CHECK IF INPUT FOR TASK IS NOT EMPTY
if(isset($_POST['steps'])){
  $step = $_POST['steps'];
  $id_project = $_GET['value'];

// FUNCTION WHICH SEND INPUT VALUE TO DATABASE
  get_steps($step, $id_project);
}
$steps = recup_step();


//GET THE STEP ID
// CHECK IF INPUT FOR TASK IS NOT EMPTY
if(isset($_POST['id_step'], $_POST['task'])){
  $tasks = $_POST['task'];
  $id_step = $_POST['id_step'];
  StepId($id_step);
  $getstepid = StepId($id_step);
  createTask($tasks, $getstepid);

// FUNCTION WHICH SEND INPUT VALUE TO DATABASE
}





include"../vue/ficheproduitVue.php";
