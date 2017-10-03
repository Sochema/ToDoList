<?php
require_once"connection_sql.php";

//DELETE project
function delete(){
  $req = get_db() -> prepare('DELETE * FROM project WHERE ID = ?');
  $req->execute(array($_GET['value']));
  $dlt= $req -> fetch();
  return $dlt;
}

function get_id(){
$req = get_db() -> prepare('SELECT * FROM project WHERE id = ?');
$req->execute(array($_GET['value']));
$value = $req->fetch();
return $value;
}

function get_steps($step, $id_project){
  $req = get_db()->prepare('INSERT INTO steps(step, id_project) VALUES (:step, :id_project)');
  $req->execute(array(
    'step' => $step,
    'id_project' => $id_project
  ));
}

function recup_step(){
  $req = get_db()-> prepare('SELECT * FROM steps WHERE id_project = ? ORDER BY ID');
  $req -> execute(array($_GET['value']));
  $stp = $req -> fetchAll();
  return $stp;
}

// function joinTables(){
//   $req = get_db()-> prepare('SELECT task.id_step , s.ID FROM step INNER JOIN task ON task.id_step = step.ID');
//
// }


function createTask($tasks, $getstepid){
  $req = get_db()->prepare('INSERT INTO task(tasks, id_step) VALUES (:tasks, :id_step)');
  $req->execute(array(
    'tasks' => $tasks,
    'id_step' => $getstepid
  ));
}

function StepId($id_step){
  $req = get_db() -> prepare('SELECT ID FROM steps WHERE ID = ?');
  $req-> execute(array($id_step));
  $ids = $req -> fetchAll();
  return $ids;
}




//
// function recup_task(){
//   $req = get_db()-> prepare('SELECT task.id_step , s.ID FROM step INNER JOIN task ON task.id_step = step.ID');
//   $req -> execute(array(...));
//   $tsk = $req -> fetchAll();
//   return $tsk;
// }
