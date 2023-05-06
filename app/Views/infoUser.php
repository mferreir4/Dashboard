<div class="infoUser">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nome</th>
                        <th scope="col">data de nascimento</th>
                        <th scope="col">usuario</th>
                        <th scope="col">cpf</th>
                        <th scope="col">numero</th>
                        <th scope="col">email</th>
                        <th scope="col">telefone</th>
                        <th scope="col">endereco</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
      <th scope="row">1</th>
      <?php
      $usuario = $_SESSION['user'];
        $conn = new Connect;
        $conn->infoUser($usuario);
      ?>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

            </table>
        </div>
        <div class="col"></div>
    </div>
</div>