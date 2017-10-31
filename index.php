<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//$user = new Usuario();
//$user->loadById(4);
//echo $user;


$lista = Usuario::getList();
echo json_encode($lista);

//$search = Usuario::search("jo");
//echo json_encode($search);

//$usuario = new Usuario();
//$usuario->login("eduardo","120976");
//echo $usuario;

 ?>