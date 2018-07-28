<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios");

echo json_encode($usuarios);
 * 
 $root = new Usuario();
 $root->loadById(1);
 echo $root;
 

 */
 echo json_encode(Usuario::getList());
 /* 
 
$search = Usuario::search("ra");
echo json_encode($search);
 * 
 
$usuario = new Usuario();
$usuario->login("rabadan", "senha123");
echo $usuario;
 * 
 *
$user = new Usuario("outro_teste", "senha_outro123");
//$user->setUser("teste");
//$user->setSenha("654321");
$user->insert();

echo $user;
 

$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("eeeeee", "111222");
echo $usuario;
 * 
 
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;
 * 
 */