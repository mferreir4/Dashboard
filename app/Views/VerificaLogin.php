<?php
session_start();

include_once 'Conexao.php';

if(isset($_POST["Usuario"]) && !empty($_POST["Usuario"]) && 
isset($_POST["Senha"]) && !empty($_POST["Senha"])){

$con = new Connect();

$email =  $_POST["Usuario"];
$senha = $_POST["Senha"];


$con->login($email,$senha);

header('Location: /index');

} 
else{

    header('location: index.php?erro=falha_login');

}

?>