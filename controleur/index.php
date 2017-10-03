<?php
require_once"../modele/insertproject.php";

$donnees = callProject();


include"../vue/indexVue.php";
