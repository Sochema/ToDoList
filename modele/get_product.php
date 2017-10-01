<?php
require_once"connection_sql.php";


function get_id(){
$req = get_db() -> prepare('SELECT * FROM project WHERE id = ?');
$req->execute(array($_GET['value']));
$value = $req->fetch();
return $value;
}
