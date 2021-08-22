<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h1>Bienvenid@ al Sistema</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">

                    Hola de nuevo, tu último ingreso fue el

                    <?php echo date("d/m/Y H:i") . "<br><br>";

                    $hr = date("H");
                    $min = date("i");
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="index.php" class="btn btn-primary float-end">Salir</a>
            </div>
        </div>
    </div>
</body>

</html>