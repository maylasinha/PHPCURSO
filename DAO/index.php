<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();

//$root->loadbyId(3);

//echo $root;
//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega uma lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("jose","1234567890");
echo $usuario;

?>