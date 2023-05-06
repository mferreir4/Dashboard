<?php
$this->extend('Layout/layout_dash');

$this->section('head_dash');
echo $this->include('/Dashboard/Layout/head_dash');
$this->section('body_home_dash');
echo $this->include('/Dashboard/Layout/body_home_dash');

?>

<?php echo form_open('/dashboard/produto_venda')?>
<div class="container-fluid px-5 md-6 ">
<div class="row g-2 my-2 ">
<div class="col-md-12">
<div class=" lg-2 col-md-12 g-1 row my-5 bg-white shadow-sm d-flex justify-content-around container-fluid px-4 align-items-center rounded" form method="POST" action= "<?php echo base_url('Dash/Venda_prod')?>">
<h3 class="fs-4 mb-3"><b>Detalhes do Pedido</b></h3>
        <div class="row-06 bg-white">
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Nome do Produto</label>
            <input type="name" name='nome' value = '<?php echo isset($produto['nome']) ? $produto['nome'] : ''?>' class="form-control" id="name">
        </div>

        <div class="col-md-12 ">
            <label for="inputPassword4" class="form-label">Quantidade</label>
            <input type="name" name= 'quantidade' value = '' class="form-control" id="name_pet">
        </div>

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Valor</label>
            <input type="value" name = "preco_ven" value = '' class="form-control">
        </div>

        <div class="col-12 mb-3">
        </div>
            <div class="col-12 mb-4">
                <input type="submit" value= "Concluir" class= "btn btn-primary" onclick = 'return confirm ("Venda concluída com sucesso")'>
                <input type="hidden" name= 'id' value="<?php echo isset($produto['id']) ? $produto['id'] : '' ?>">

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
