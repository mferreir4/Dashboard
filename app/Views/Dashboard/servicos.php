<?php
$this->extend('Layout/layout_dash');

$this->section('head_dash');
echo $this->include('/Dashboard/Layout/head_dash');
$this->section('body_home_dash');
echo $this->include('/Dashboard/Layout/body_home_dash');

?>
<?php echo form_open('/dashboard/servico')?>
<div class="container-fluid px-5 md-6 ">
<div class="row g-2 my-2 ">

<div class="col-md-12">
<div class=" lg-2 col-md-12 g-1 row my-5 bg-white shadow-sm d-flex justify-content-around container-fluid px-4 align-items-center rounded" form method="POST" action="<?php echo base_url('Dash/Add_Servico')?> ">
    <h3 class="fs-4 mb-3">Novo Serviço</h3>
        <div class="row-06 bg-white">
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Responsável</label>
            <input type="name" name='nome' class="form-control" id="name">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Nome do PET</label>
            <input type="name" name='nome_pet' class="form-control" id="name_pet">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Agenda</label>
            <input type="date" name='data' class="form-control" id="datta">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Horário</label>
            <input type="time" name='hora' class="form-control" id="hora">
        </div>

        <div class="col-md-12 ">
            <label for="inputEmail4" class="form-label">Valor</label>
            <input type="value" name= 'valor' class="form-control" id="valor" placeholder="Exemplo: 50,00">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Serviço</label>
            <input type="name" name='servico' class="form-control" id="name_pet">
        </div>

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Observações</label>
                <textarea class="form-control" name='observacao' id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <div class="col-12">
            </div>
            <div class="col-12 mb-3">
                <button type="submit" class="btn btn-primary">Adicionar</button>
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