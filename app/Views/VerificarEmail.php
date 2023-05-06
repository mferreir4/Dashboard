<?php
session_start();
$_SESSION['cpf'] = $cpf = $_POST['cpf'];
$contcpf = strlen($cpf);
if($contcpf <= 11)
{

    $_SESSION['fist_name'] = $fistName = $_POST['fist_name'];
    $_SESSION['second_name'] = $secondName = $_POST['second_name'];
    $_SESSION['email'] = $email = $_POST['email'];
    $_SESSION['password'] = $password = $_POST['password'];
    $confPassword = $_POST['confPassword'];
    
    
    if ($password == $confPassword) {
        $_SESSION['user'] = "true";
        header('location: ./info.php?pg=1');
    }
    else {
        header('Location: ./cadastro__email.php?error=1');
    }
    }
    

else
{
    header('Location: ./cadastro__email.php?mincpf=1');
}