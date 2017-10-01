<?php

require_once"connection_sql.php";

function insertProject($title, $status, $description){
  $req = get_db()->prepare('INSERT INTO project(title, status, description, date_project) VALUES (:title, :status, :description, CURDATE())');
  $req->execute(array(
    'title' => $title,
    'status' => $status,
    'description' => $description
  ));

}

function callProject(){
    $req = get_db()->query('SELECT * FROM project');
    $data= $req->fetchAll();
    return $data;
  }
