<?php
session_start();

$fist_name = $_SESSION['fist_name'];
$second_name = $_SESSION['second_name'];
$cpf = $_SESSION['cpf'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

$celular = $_POST['celular'];



if (strlen($celular) >= 11) 
{
    $telefone = $_POST['telefone'];    $complemento = $_POST['complemento'];    $numero = $_POST['numero'];    $usuario = $_POST['usuario'];    $data_nasc = $_POST['data_nasc'];
    include_once "Conexao.php";
    $con = new Connect();
    $con->newClient($cpf, $fist_name, $second_name, $email, $password, $telefone, $complemento, $numero, $usuario, $data_nasc, $celular);
}
else 
{
    header('location: ./cadastro__info.php?min=11');
}