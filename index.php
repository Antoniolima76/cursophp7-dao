<?php 

require_once("config.php");

//$root = new Usuario(); //carrega umm usuario//
//$root->loadbyid(3);
//echo $root;

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuario, buscando login
//$search = Usuario::search("ja");
//echo json_encode($search);

//carrega um usuario usando login e senha 
//$usuario = new Usuario();
//$usuario->login("root", "%rse$");

//echo $usuario;

//Criando novo usuario
//$aluno = new Usuario("aluno", "@aluno");

//$aluno->insert();

//echo $aluno;

//alterar um usuario
/*$usuario = new Usuario();

$usuario->loadbyid(11);

$usuario->update("vida", "antonio");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadbyid(11);
$usuario->delete();

echo $usuario;
 ?>