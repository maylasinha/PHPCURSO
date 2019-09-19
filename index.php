<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();

//$root->loadById(3);

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

//$usuario = new Usuario();
//$usuario->login("joao", "qwerty");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");

//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->update("professor", "!1234!");

echo $usuario;
?>