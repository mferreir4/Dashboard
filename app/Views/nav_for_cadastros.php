<header>
    <div class="container">
        <div class="div-logo">
            <img src="Imagens/pata.svg" alt="">
        </div>
            <p id="p-nome">Petscão</p>
                <div class="div-cadastro">
                <li><a href=layouts/login.php><?php  
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
    </div>
    </header>
    <nav>
    <ul>
        <li><a href="index.php">Inicio</a>
   	    <li><a href="EMPRESA.php">A Empresa</a>
           <li><a href="./cadastro__produto.php">Produtos</a>
		<li><a href="banhotosa.php">Banho e Tosa</a>
		<li><a href="layouts/contato.php">Contato</a>
	</ul>
    </nav>
