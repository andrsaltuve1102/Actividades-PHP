<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[0] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[1] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[2] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
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
        <h1>Listado de Productos</h1>
    </div>
    <main class="container">
        <div class="row">
            <div class="col 12">

                <table class="table tabke-hover border">
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>


                    <?php

                    for($i = 0; $i < count($aProductos); $i++){
                        echo "<tr>";
                        echo "<td>" . $aProductos[$i]["nombre"] . "</td>";
                        echo "<td>" . $aProductos[$i]["marca"] . "</td>";
                        echo "<td>" . $aProductos[$i]["modelo"] . "</td>";
                        echo "<td>" . ($aProductos[$i]["stock"] == 0? "No hay stock" : ($aProductos[$i]["stock"] > 10? "Hay stock" : "Poco stock")) . "</td>";
                        echo "<td>" . $aProductos[$i]["precio"] . "</td>";
                        echo "<td><button class='btn btn-primary'>Comprar</button></td>";
                        echo "</tr>";
                    }

                    ?>


                </table>
            </div>

        </div>

    </main>
</body>

</html>