<?php 
if (isset($_GET['pg'])) {
    session_name('pgRecEmail');
    session_start();
    ob_start();
} else {
    session_destroy();
    header('location: ./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Recuperacao De Email</title>
</head>

<body>
    <div class="container">
    <div class="row">
        <div class="col fist">
        </div>
        <div class="col second">
            <form action="" method="post">
                <input type="tel" name="phone" id="phone">
                <input type="button" value="submit">
            </form>
        </div>
        <div class="col third ">
        </div>
    </div>
    </div>
</body>

</html>