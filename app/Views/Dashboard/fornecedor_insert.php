<?php
    $this->extend('Layout/layout_dash');

    $this->section('head_dash');
    echo $this->include('/Dashboard/Layout/head_dash');
    $this->section('body_home_dash');
    echo $this->include('/Dashboard/Layout/body_home_dash');

    ?>
<?php echo form_open('/dashboard/fornecedor_add')?>
<div class="container-fluid px-5 md-6 ">
<div class="row g-2 my-2 ">
<div class="col-md-12">
<div class=" lg-2 col-md-12 g-1 row my-5 bg-white shadow-sm d-flex justify-content-around container-fluid px-4 align-items-center rounded" form method="POST" action="<?php echo base_url('Dash/Add_Servico')?> ">
    <h3 class="fs-4 mb-3">Dados Fornecedores</h3>
    <div class="row-06 bg-white">
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Empresa</label>
            <input type="name" name='nome' value= "<?php echo isset($editar['nome']) ? $editar['nome'] : ''?>" class="form-control" id="name">
        </div>

        <div class="col-md-12 ">
            <label class="form-label">CNPJ</label>
            <input type="name" value="<?php echo isset($editar['cnpj']) ? $editar['cnpj'] : '' ?>" name='cnpj' class="form-control"  require>
        </div>

        <div class="col-md-12 ">
            <label class="form-label">Telefone</label>
            <input type="text" value ="<?php echo isset($editar['numero']) ? $editar['numero'] : ''?>" name='numero' class="form-control" placeholder="(11) XXXX-XXXX" >
        </div>

        <div class="col-md-12 ">
            <label class="form-label">E-mail</label>
            <input type="email" value ="<?php echo isset($editar['email']) ? $editar['email'] : ''?>" name='email' class="form-control" >
        </div>

        <div class="col-md-12 ">
            <label class="form-label">Endereço</label>
            <input type="text" name='endereco' value ="<?php echo isset($editar['endereco']) ? $editar['endereco'] : ''?>" class="form-control" >
        </div>
        <div class="col-md-12 ">
            <label class="form-label">Complemento</label>
            <input type="text" name='complemento' value = "<?php echo isset($editar['complemento']) ? $editar['complemento'] :''?>" class="form-control" >
        </div>

        <div class="col-12">

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Observações</label>
                <textarea class="form-control" name='observacao' id="exampleFormControlTextarea1" rows="3"></textarea>
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