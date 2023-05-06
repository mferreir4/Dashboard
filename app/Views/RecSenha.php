<?php 
if (isset($_GET['pg'])) {
    session_name('pgRedSenha');
    session_start();
    ob_start();
} else {
    session_destroy();
    header('location: ./login.php');
}

include_once "head.php";
?>


<body>
    <div class="container">
        <div class="row">
            <div class="col fist">
            </div>
            <div class="col second">
                <form action="" method="post">
                    <input type="email" name="email" id="email">
                    <input type="button" value="submit">
                </form>
            </div>
            <div class="col third ">
            </div>
        </div>
    </div>
</body>

</html>