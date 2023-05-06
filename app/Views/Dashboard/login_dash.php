<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    </style>
</head>

<body style="background-color: white;">

    <div class="container" style="margin-top:5%">
        <div class=" col-10 m-auto">
            <div class="row">
                <div class=" col-md-11 m-auto">
                        <div class="container mt-3">
                            <?php
                             $attributes = ['autocomplete' => 'off', 'enctype' => 'multipart/form-data'];
                             echo form_open('dashboard/logar',$attributes)?>
                                <form method="POST" action="<?php echo base_url('Dash/Logar')?>" autocomplete="off" enctype="multipart/form-data">
                                <h1 style="text-align:center; font-size:25px; padding:15px;">
                                    <b>LOGIN</b></h1>
                                    <div class="form-floating mt-3 mb-3">
                                    <input type="email" class="form-control" placeholder="Digite o seu Email"
                                        name='email' required>
                                    <label>Digite seu Email</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="password" class="form-control" placeholder="Digite a sua Senha"
                                        name='senha'required>
                                    <label>Digite sua Senha</label>
                                </div>
                                    <div class="mt-3 mb-3">
                                        <div class="row m-auto">
                                        <button type="submit" class="btn btn-success btn-lg btn-block"
                                            style="font-size:16px" value="cadastrar">Logar</button>
                                    </div>
                                    <div style="margin-top:5px">
                                        <div class="row m-auto">
                                            <button type="submit" class="btn btn-success btn-lg"
                                                style="font-size:16px"
                                                onclick="href='/index.php'">Início</button>
                                    </div>
                                    </div>
                                    <?php echo form_close()?>
                            </form>
                            <?php $msg = session()->getFlashData('msg'); 
                                if (!empty($msg)) {
                                    echo "<div class ='alert alert-danger'>";
                                    echo $msg;
                                    echo "</div";

                                }
                            ?>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>