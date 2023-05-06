<?php
    $this->extend('Layout/layout_dash');

    $this->section('head_dash');
    echo $this->include('/Dashboard/Layout/head_dash');
    $this->section('body_home_dash');
    echo $this->include('/Dashboard/Layout/body_home_dash');

    ?>     
    <body>

<div class="container-fluid px-4">
<div class="row g-3 my-2">
    <div class="col-md-3">
        <div
            class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
            <?php foreach ($listas as $lista) :?>
                <h3 class="fs-2"><?php 
                if(isset($lista)){
                echo $lista;}
                else{
                echo '0';
                }?></h3>
                <p class="fs-5">Total Serviços</p>
            </div>
            <?php endforeach; ?>
            <i class="fa-solid fa-thumbtack fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
   

    <div class="col-md-3">
        <div
            class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div> 
            <?php foreach ($valores as $valor) :?>           
            <h3 class="fs-2" ><?php 
                if(isset($valor)){
                echo 'R$'.$valor;}
                else{
                echo 'R$ 0.00';
                }?></h3>
            <p class="fs-5">Vendas Serviços</p>
            </div>
            <?php endforeach; ?>
            <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div
            class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
            <?php foreach ($produtos as $produto) :?>
                <h3 class="fs-2"><?php 
                if(isset($produto)){
                echo 'R$'.$produto;}
                else{
                echo 'R$ 0.00';
                }?></h3>
                <p class="fs-5">Vendas Produtos</p>
            </div>
            <?php endforeach; ?>
            <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-3">
        <div
            class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
            <?php foreach ($total as $totais) :?>
                <h3 class="fs-2"><?php 
                if(isset($totais)){
                echo 'R$'.$totais;}
                else{
                echo 'R$ 0.00';
                }?></h3>
                <p class="fs-5">Faturamento</p>
            </div>
            <?php endforeach; ?>
            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
                    <div class="row my-5">
                    <h3 class="fs-4 mb-4"><b>Clientes</b></h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Contato</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                                       
                                </tr>
                             <?php foreach ($clientes as $cliente): ?>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $cliente['nome'] ?></td>
                                    <td><?php echo $cliente['celular'] ?></td>
                                    <td><?php echo $cliente['email'] ?></td>                                            
                                    <td><?php echo anchor ('/cliente/'.$cliente['id'], 'Editar', ['class' => 'btn btn-primary'])?>
                                    <td><?php echo anchor ('/cliente/delete'.$cliente['id'], 'Excluir', ['class' => 'btn btn-danger','onclick'=>'return confirm("Deseja realmente excluir o cliente?")']) ?>                             
                                </tr>
                            </tbody>
                            <?php endforeach; ?> 
                        </table>

                        <?php echo $pages->links();?>
                        <div class="col-12 mb-3">
                        <a href="cliente_insert" class="btn btn-primary">Adicionar</a>
                        </div>
                        <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js">
                             
                        </script>
                        <script>
             
        
        function confirmar(){
            if(!confirmar('Você realmente deseja cancelar o serviço?')){
                return false;
            }
            return true;
        }
    </script>
                        <script>
                        var el = document.getElementById("wrapper");
                        var toggleButton = document.getElementById("menu-toggle");

                        toggleButton.onclick = function() {
                            el.classList.toggle("toggled");
                        };
                        
                        </script>
            </body>
            </html>