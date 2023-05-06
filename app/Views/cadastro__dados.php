<?php
include_once "./includes/head.php";
include_once "bootstrap.php";
$boot = new bootstrap();
$boot->css();
session_start();

if(!isset($_SESSION['user'])){
    header('Location: ./layouts/login.php?erro=true');
}

?>
<style>
    #submit {
        padding: 5px;
    }

    body {
        width: 99%;
    }
</style>
</head>

<body class="bg-success bg-opacity-25 text-white">
    <form method="POST" action="VerificaDados.php">
        <?php
        $_SESSION['veri'] = $_SESSION['user'] ;
    unset($_SESSION['user']);
require_once "formDados.php";
?>
    </form>
</body>

</html>

<?php

?>