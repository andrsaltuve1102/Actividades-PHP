<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();
$aPacientes[0] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes[1] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79
);
$aPacientes[2] = array(
    "dni" => "23.645.987",
    "nombre" => "Juan Irraola",
    "edad" => 28,
    "peso" => 75
);
$aPacientes[3] = array(
    "dni" => "21.463.213",
    "nombre" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 69
);

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h1>Listado de Pacientes</h1>
    </div>
    <main class="container">
        <div class="row">
            <div class="col 12">

                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y Apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>

                    </tr>

                    <?php

                    foreach($aPacientes as $pos =>$apaciente){
                        echo "<tr>";
                        echo "<td>" . $apaciente["dni"] . "</td>";
                        echo "<td>" . $apaciente["nombre"] . "</td>";
                        echo "<td>" . $apaciente["edad"] . "</td>";
                        echo "<td>" . $apaciente["peso"] . "</td>";
                        echo "</tr>";
                    }

                    

                    ?>


                </table>
            </div>

        </div>

    </main>
</body>

</html>