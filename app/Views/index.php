<?php

$this->extend('layout.php');

$this->section('head');
echo $this->include("head.php");
$this->include("bootstrap.php");
$this->endSection();

?>

    <link rel="stylesheet" href="../../public/css/grid.css">
    <title>Petscao</title>
<body>  
<section>
<?= 
 $this->section('navbar');
 echo $this->include("header_nav.php");
 $this->endSection();
$this->section('content') ?>
    <main>
        <p>Alguns dos nossos produtos</p>
        <div class="prod_main">
            <div class="img_prod"><img src="Imagens/produto1.png"></div>
        </div>
        <div class="prod_main">
            <div class="img_prod"><img src="Imagens/produto2.png"></div>
        </div>
        <div class="prod_main">
            <div class="img_prod"><img src="Imagens/produto3.png"></div>
        </div>
        <div class="prod_main">
            <div class="img_prod"><img src="Imagens/produto2.png"></div>
        </div>
    </main>
    <aside>
    </aside>
    <?= $this->endSection();

     $this->section('footer');
     echo $this->include("./footer.php");
     $this->endSection() ?>
</section>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=5511960420981&text=Ol%C3%A1!" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>
</html>
 