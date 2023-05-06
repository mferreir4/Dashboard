<?php

// uma class para gerar alertas em js
class alerts
{
    public function error()
    {
        if (isset($_GET['error'])) {

?>
<script>
    alert("error BD")
</script>
<?php


        }
    }


    public function celular()
    {
        if (isset($_GET['min'])) {

?>
<script>
    alert("celular invalido")

</script>
<?php

        }
    }

    public function user()
    {
        if (isset($_GET['existuser'])) {

?>
<script>
    alert("user ja cadastrado")

</script>
<?php

        }
    }

    public function cpf()
    {
        if (isset($_GET['existcpf'])) {
?>
<script>
    alert("cpf ja cadastrado")
</script>
<?php
        }
    }

    public function mincpf()
    {
        if (isset($_GET['mincpf'])) {
?>
<script>
    alert("valor de cpf invalido")
</script>
<?php
        }
    }

    public function email()
    {
        if (isset($_GET['existemail'])) {

?>
<script>
    alert("email ja cadastrado")

</script>
<?php

        }
    }
    public function Password(){
    if (isset($_GET['error'])) {
    ?>
                <div class="danger">
                    <script>
                        alert("Password different")
                    </script>

                </div>
                <?php
    }
}

}


/* validation
 
 (function () {
 'use strict';
 window.addEventListener('load', function () {
 var forms = document.getElementsByClassName('needs-validation');
 var validation = Array.prototype.filter.call(forms, function (form) {
 form.addEventListener('submit', function (event) {
 if (form.checkValidity() === false) {
 event.preventDefault();
 event.stopPropagation();
 }
 form.classList.add('was-validated');
 }, false);
 });
 }, false);
 })();
 
*/