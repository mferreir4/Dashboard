<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/grid.css">
    <title>Petscao</title>
</head>
<body>  
<section>
    <header>
    <div class="container">
        <div class="div-logo">
            <img src="Imagens/pata.svg" alt="">
        </div>
            <div class="div-busca">
            <p id="p-nome">Petscão</p>
                <label class="label-busca" for="search"></label>
                <input name="Busca" placeholder="O que está procurando?" type="text">
                <button class="btn-busca">Buscar</button>
            </div>
                <div class="div-cadastro">
                <li><a href=./login><?php  
                if(isset($_SESSION['cli'])){
                    echo ("Seja bem-vindo(a) "),$_SESSION['cli'];
                    echo "<li><a href=update.php>Atualizar dados</a>";
                    echo "<li><a href=logout.php>Sair</a>";  
                }
                else{
                    echo 'login';
                }
                ?></a>
                
                </div>
                    <div class="div-carrinho">
                        <p>div do carrinho</p>
                    </div>
    </div>
    </header>
    <nav>
    <ul>
        <li><a href="novologin.php">Inicio</a>
   	    <li><a href="">A Empresa</a>
	    <li><a href="CadProdutos.php">Produtos</a>
		<li><a href="banhotosa.php">Banho e Tosa</a>
		<li><a href="contato.php">Contato</a>
	</ul>
    </nav>
    <main>