<?php
$this->extend('Layout/layout_dash');

$this->section('head_dash');
echo $this->include('/Dashboard/Layout/head_dash');
$this->section('body_home_dash');
echo $this->include('/Dashboard/Layout/body_home_dash');

?>

<?php echo form_open('/dashboard/confirm')?>
<div class="container-fluid px-5 md-6 ">
<div class="row g-2 my-2 ">
<div class="col-md-12">
<div class=" lg-2 col-md-12 g-1 row my-5 bg-white shadow-sm d-flex justify-content-around container-fluid px-4 align-items-center rounded" form method="POST" action= "<?php echo base_url('Dash/Add_Valor')?>">
<h3 class="fs-4 mb-3"><b>Detalhes do Pedido</b></h3>
        <div class="row-06 bg-white">
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Responsável</label>
            <input type="name" name='nomes_resp' value = '<?php echo isset($confirmado['nome']) ? $confirmado['nome'] : ''?>' class="form-control" id="name">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Nome do PET</label>
            <input type="name" name='nome_pets' value = '<?php echo isset($confirmado['nome_pet']) ? $confirmado['nome_pet'] : ''?>' class="form-control" id="name_pet">
        </div>

        <div class="col-md-12 ">
            <label for="inputEmail4" class="form-label">Valor</label>
            <input type="value" name = "valores_serv" value = "<?php echo isset($confirmado['valor']) ? $confirmado['valor'] : ''?>" class="form-control">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Serviço</label>
            <input type="name" name='servicos' value = '<?php echo isset($confirmado['servico']) ? $confirmado['servico'] : ''?>' class="form-control" id="name_pet">
        </div>

        <div class="col-12 mb-4">
        </div>
            <div class="col-12 mb-4">
                <input type="submit" value= "Concluir" class= "btn btn-primary" onclick = 'return confirm ("Deseja realmente confirmar o serviço?")'>
                <input type="hidden" name= 'id' value="<?php echo isset($confirmado['id']) ? $confirmado['id'] : '' ?>">

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
