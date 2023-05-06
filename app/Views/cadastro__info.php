<?php
/*
session_start();
if(!isset($_SESSION['user'])){
    session_destroy();
    header('Location: ./login.php?erro=true');
}
*/
?>
<form action="verificaInfo.php" method="post">
<div class="form text-bg-secondary p-3">
<?php
unset($_SESSION['user']);
include_once "form_info.php";
?>
</div>
</form>
<div class="error">
<?php
include_once "alert.php";
$alert = new alerts();
$alert->celular();
$alert->cpf();
$alert->user();
$alert->email();
$alert->error();
?>                               
</div>
