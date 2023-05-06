<?php

/*
 session_start();
 if(!isset($_SESSION['user'])){
 session_destroy();
 header('Location: ./login.php?erro=true');
 }
 else
 { */
?>
<style>
    #submit {
        padding: 5px;
    }

    body {
        width: 99%;
    }
</style>


</head>

<body class="bg-success bg-opacity-25 text-white">
    <form method="POST" action="/cadastro/email">
        <?php
unset($_SESSION['user']);


 //form_open('formEmail');

require_once "formEmail.php";
//form_close();
?>
    </form>
    <script>
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
    </script>
    <div class="error">
        <?php
include_once "alert.php";
$alert = new alerts();
$alert->email();
$alert->cpf();
$alert->Password();
$alert->mincpf();
?>
    </div>
</body>

</html>

<?php
ob_end_flush();
// }
?>