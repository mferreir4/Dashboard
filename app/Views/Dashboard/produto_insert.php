<?php
    $this->extend('Layout/layout_dash');

    $this->section('head_dash');
    echo $this->include('/Dashboard/Layout/head_dash');
    $this->section('body_home_dash');
    echo $this->include('/Dashboard/Layout/body_home_dash');

    ?>
<?php echo form_open('/dashboard/produtos_add')?>
<div class="container-fluid px-5 md-6 ">
<div class="row g-2 my-2 ">

<div class="col-md-12">
<div class=" lg-2 col-md-12 g-1 row my-5 bg-white shadow-sm d-flex justify-content-around container-fluid px-4 align-items-center rounded" form method="POST" action="<?php echo base_url('Dash/Add_Servico')?> ">
    <h3 class="fs-4 mb-3">Cadastro de Produtos</h3>
    <div class="row-06 bg-white">
        <div class="col-md-12">
            <label class="form-label">Nome do Produto</label>
            <input type="name" name='nome' value= "<?php echo isset($editar['nome']) ? $editar['nome'] : ''?>" class="form-control" id="name">
        </div>

        <div class="col-md-12 ">
            <label class="form-label">Valor de Compra</label>
            <input type="name" name='preco_comp' value= "<?php echo isset($editar['preco_comp']) ? $editar['preco_comp'] : ''?>" class="form-control" id="name_pet">
        </div>

        <div class="col-md-12 ">
            <label class="form-label">Peso do Produto</label>
            <input type="text" name='peso' value= "<?php echo isset($editar['peso']) ? $editar['peso'] : ''?>" class="form-control" >
        </div>

        <div class="col-md-12">
            <label class="form-label">Público Alvo</label>
            <input type="name" name='publico' value= "<?php echo isset($editar['publico']) ? $editar['publico'] :''?>" class="form-control" id="name" placeholder="Exemplo: Produto destinado para gatos">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Validade</label>
            <input type="date" name='validade' value= "<?php echo isset($editar['validade']) ? $editar['validade'] : ''?>" class="form-control" id="valor">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Quantidade</label>
            <input type="number" name='quantidade' value= "<?php echo isset($editar['quantidade']) ? $editar['quantidade'] : ''?>" class="form-control" id="valor">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Código de Barras</label>
            <input type="text" name='cod_barras' value= "<?php echo isset($editar['cod_barras']) ? $editar['cod_barras'] : ''?>" class="form-control" id="valor" placeholder= "Somente números">
        </div>

        <div class="col-md-12 gx-5">
            <label for="inputPassword4" class="form-label">Preço de Venda</label>
            <input type="text" name='preco_ven' value= "<?php echo isset($editar['preco_ven']) ? $editar['preco_ven'] : ''?>" class="form-control" id="valor">
        </div>

        <div class="col-12">

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" name='descricao' value= "<?php echo isset($editar['descricao']) ? $editar['descricao'] :''?>" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12">
            </div>
            <div class="col-12 mb-3">
                <input type="submit" value= "Salvar" class="btn btn-primary">
                <input type="hidden" name="id" value="<?php echo isset($editar['id']) ? $editar['id'] : ''?>">
            </div>
            <?php echo form_close()?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js">
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