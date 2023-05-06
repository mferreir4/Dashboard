<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
</head>

<body style="background-color: whitesmoke;">

    <div class="container" style="margin-top:5%">
        <div class=" col-10 m-auto">
            <div class="row">
                <div class=" col-md-11 m-auto">
                    <div id="containerCadastroConta">
                        <div class="container mt-3">
                            <form method="POST" action="#" autocomplete="off"
                                enctype="multipart/form-data">
                                <h1 style="text-align:center; font-size:25px; padding:15px;">
                                    <b>PERFIL</b></h1>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" placeholder="Nome" 
                                        name="cadastrarULogin">
                                    <label>Nome</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="email" class="form-control" placeholder="Seu E-mail"
                                        name='#'>
                                    <label>Seu E-mail</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="password" class="form-control" placeholder="Nova Senha"
                                        name="#">
                                    <label>Nova Senha</label>
                                </div>                               
                                <div class="row m-auto">
                                    <button type="submit" class="btn btn-success btn-lg btn-block"
                                        style="font-size:16px" value="cadastrar" name="botao">Atualizar</button>
                                </div>
                                <div style="margin-top:5px">
                                    <div class="row m-auto">
                                        <a href='/dashboard' class="btn btn-success btn-lg btn-block" style="font-size:16px">Voltar</a>
                            
                                    </div>
                                </div>

                            </form>
                        </div>
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