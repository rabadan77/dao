<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios");

echo json_encode($usuarios);
 * */
 $root = new Usuario();
 $root->loadById(1);
 echo $root;