<?php

include_once "./includes/head.php";
include_once "bootstrap.php";
include_once "./includes/navbar_teste.php";
?>
<form action="../Petscao/VerificarProduto.php" method="post">
    <div class="form">
    <?php
unset($_SESSION['user']);
include_once "form_Produtos.php";
?>
    </div>
</form>

