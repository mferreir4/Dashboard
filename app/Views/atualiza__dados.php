<?php

require_once 'Conexao.php';

$id= $_SESSION['ID'];
$nome= $_POST["primeiro_nome"];
$sobrenome= $_POST["sobrenome"];
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];
$cpf= $_POST["cpf"];
$datt= $_POST["data_nas"];
$dog= $_POST["nome_pet"];
$email= $_POST["email"];
$endereco= $_POST["endereco"];
$complemento= $_POST["complemento"];
$estado= $_POST ["estado"];
$celular= $_POST ["celular"];
$telefone= $_POST["telefone"];


$con= new Connect();


$con->updat($id,$nome,$sobrenome,$usuario,$senha,$cpf,$datt,$dog,$email,$endereco,$complemento,$estado,$telefone,$celular); //cuidado ao alterar as ordens aqui, isso pode influencciar no momento do update.


