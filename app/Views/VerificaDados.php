<?php
$_SESSION['user'] = $_SESSION['veri'];
$cep = $_POST['cep'];
$contcep = strlen($cep);

if ($contcep > 8 || $contcep < 7) {
    header('location: cadastro__dados.php?errorcep');
    // verificacao de cep futura
} else {
if($logradouro = $_POST['logradouro'] == NULL)
{
    $logradouro = "Nao Informado";
}
else
{
    $logradouro = $_POST['logradouro'];
}
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$estado = $_POST['selectname'];

//conexão BD
include_once 'Conexao.php';
$con = new Connect();

$con->dados($cep,$logradouro,  $bairro, $cidade, $estado);
}
