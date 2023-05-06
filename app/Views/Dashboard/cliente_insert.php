<?php
    $this->extend('Layout/layout_dash');

    $this->section('head_dash');
    echo $this->include('/Dashboard/Layout/head_dash');
    $this->section('body_home_dash');
    echo $this->include('/Dashboard/Layout/body_home_dash');

    ?>
<?php echo form_open('dashboard/cliente_insert')?>
<div class="container-fluid px-5 md-6 ">
<div class="row g-2 my-2 ">

<div class="col-md-12">
<div class=" lg-2 col-md-12 g-1 row my-5 bg-white shadow-sm d-flex justify-content-around container-fluid px-4 align-items-center rounded" form method="POST" action= "<?php echo base_url('Dash/Cliente_add')?> ">
    <h3 class="fs-4 mb-3">Clientes</h3>
    <div class="row-06 bg-white">
        <div class="col-md-12">
            <label class="form-label">Nome Completo</label>
            <input type="name" name='nome' value= "<?php echo isset($cliente['nome']) ? $cliente['nome'] : ''?>" class="form-control" id="name">
        </div>

        <div class="col-md-12 ">
            <label class="form-label">Data Nascimento</label>
            <input type="date" name='data_nasc' value= "<?php echo isset($cliente['data_nasc']) ? $cliente['data_nasc'] : ''?>" class="form-control" id="name_pet">
        </div>

        <div class="col-md-12 ">
            <label class="form-label">CPF</label>
            <input type="text" name='cpf' value= "<?php echo isset($cliente['cpf']) ? $cliente['cpf'] : ''?>" class="form-control" >
        </div>

        <div class="col-md-12">
            <label class="form-label">E-mail</label>
            <input type= "text" name= "email" value="<?php echo isset($cliente['email']) ? $cliente['email'] : ''?>" class="form-control" id="email">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Contato</label>
            <input type="text" name='celular' value= "<?php echo isset($cliente['celular']) ? $cliente['celular'] : ''?>" class="form-control" id="valor">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Endereço</label>
            <input type="text" name='endereco' value= "<?php echo isset($cliente['endereco']) ? $cliente['endereco'] : ''?>" class="form-control" id="valor">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Complemento</label>
            <input type="text" name='complemento' value= "<?php echo isset($cliente['complemento']) ? $cliente['complemento'] : ''?>" class="form-control" id="valor" placeholder= "Somente números">
        </div>

            <div class="col-12 mb-3">
            </div>
            <div class="col-12 mb-3">
                <input type="submit" value= "Salvar" class="btn btn-primary">
                <input type="hidden" name="id" value="<?php echo isset($cliente['id']) ? $cliente['id'] : ''?>">
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