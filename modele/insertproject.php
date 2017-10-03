<?php

require_once"connection_sql.php";

function insertProject($title, $status, $description, $deadline){
  $req = get_db()->prepare('INSERT INTO project(title, status, description, date_project, deadline) VALUES (:title, :status, :description, CURDATE(), :deadline)');
  $req->execute(array(
    'title' => $title,
    'status' => $status,
    'description' => $description,
    'deadline' => $deadline
  ));
}

function callProject(){
    $req = get_db()->query('SELECT * FROM project');
    $data= $req->fetchAll();
    return $data;
  }

function changeColor($status){
  if ($status == 'ongoing'){
    $color = "#A7D46F";
  } else {
    $color = "#E23E57";
    }
    return $color;
}
