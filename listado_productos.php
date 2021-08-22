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

                    <tr>
                        <td><?php echo $aProductos[0]["nombre"]; ?></td>
                        <td><?php echo $aProductos[0]["marca"]; ?></td>
                        <td><?php echo $aProductos[0]["modelo"]; ?></td>
                        <td><?php echo $aProductos[0]["stock"] == 0 ? "No hay stock" : ($aProductos[0]["stock"] > 10 ? "Hay stock" : "Poco stock"); ?></td>
                        <td><?php echo $aProductos[0]["precio"]; ?></td>
                        <td> <button class="btn btn-primary">Comprar</button>
                    </tr>

                    <tr>
                        <td><?php echo $aProductos[1]["nombre"]; ?></td>
                        <td><?php echo $aProductos[1]["marca"]; ?></td>
                        <td><?php echo $aProductos[1]["modelo"]; ?></td>
                        <td><?php echo $aProductos[1]["stock"] == 0 ? "No hay stock" : ($aProductos[1]["stock"] > 10 ? "Hay stock" : "Poco stock"); ?></td>

                        <td><?php echo $aProductos[1]["precio"]; ?></td>
                        <td> <button class="btn btn-primary">Comprar</button>
                    </tr>

                    <tr>
                        <td><?php echo $aProductos[2]["nombre"]; ?></td>
                        <td><?php echo $aProductos[2]["marca"]; ?></td>
                        <td><?php echo $aProductos[2]["modelo"]; ?></td>
                        <td><?php echo $aProductos[2]["stock"] == 0 ? "No hay stock" : ($aProductos[2]["stock"] > 10 ? "Hay stock" : "Poco stock"); ?></td>

                        <td><?php echo $aProductos[2]["precio"]; ?></td>
                        <td> <button class="btn btn-primary">Comprar</button>
                    </tr>

                </table>
            </div>

        </div>

    </main>
</body>

</html>