<?php 
include_once "./includes/head.php";
include_once "bootstrap.php";
$boot = new bootstrap();
$boot->css();

session_start();
if(!isset($_SESSION['user'])){
    session_destroy();
header('Location: login.php?erro=true');
}
?>
 	<meta name="keywords" content="pet">
 	<meta name="description" content="Site de PetShop">
 	<link rel="stylesheet" type="text/css" href="css/estiloindex.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">

<body style="background-image: url(Imagens/fundopet.jpg)">
<?php
include_once "./includes/navbar.php";
?>
<main>

    <div id="serviços">
    <center><img id="img2"src="Imagens/banhoetosa.jpg" alt="banhoetosa"></center>
    </div>
</main>

	<?php
	include "./includes/footer.php";	
	?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="#" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>	

</body>
</html>
<?php 
$boot->javascript();
ob_end_flush();
?>