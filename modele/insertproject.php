<?php

require_once"connection_sql.php";

function insertProject($title, $status, $description){
  $req = get_db() -> prepare('INSERT INTO project VALUES (:title, :status, :description, CURDATE())');
  $req -> execute(array(
    'title' => $title,
    'status' => $status,
    'description' => $description
  ));

}
