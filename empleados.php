
<?php

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33765012, "nombre" => "Ana Acuña", "bruto" => 75000);
$aEmpleados[] = array("dni" => 23684385, "nombre" => "Gonzalo Bustamante", "bruto" => 80000);
$aEmpleados[] = array("dni" => 23645987, "nombre" => "Juan Irraola", "bruto" => 70000);
$aEmpleados[] = array("dni" => 21463213, "nombre" => "Beatriz Ocampo", "bruto" => 110000);
$aEmpleados[] = array("dni" => 25937596, "nombre" => "Mary Suárez", "bruto" => 65000);
$aEmpleados[] = array("dni" => 22950123, "nombre" => "Emily Lobo", "bruto" => 110000);
$aEmpleados[] = array("dni" => 21564332, "nombre" => "Andres Altuve", "bruto" => 95000);
$aEmpleados[] = array("dni" => 29725632, "nombre" => "Nelson Dugarte", "bruto" => 66000);
$aEmpleados[] = array("dni" => 28276352, "nombre" => "Amarilis Sosa", "bruto" => 78000);
$aEmpleados[] = array("dni" => 22334567, "nombre" => "Oscar Pulido", "bruto" => 85000);



function calcularNeto($bruto){
    return $bruto - $bruto * 0.17;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="py-5 text-center">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                <tr>
                    <th>DNI</th>
                    <th>Nombre y Apellido</th>
                    <th>Sueldo</th>
                </tr>

                <?php for($i = 0; $i < count($aEmpleados); $i++) { ?>
                <tr>
                    <td><?php echo $aEmpleados[$i]["dni"]; ?></td>
                    <td><?php echo mb_strtoupper($aEmpleados[$i]["nombre"]); ?></td>
                    <td><?php echo number_format(calcularNeto($aEmpleados[$i]["bruto"]), 2, ",", "."); ?></td>
                </tr>
                
                <?php } ?>
                </table>
            </div>
        </div>
        <div>
            <div class="col-12">
                    <p>Cantidad de empleados activos: <?php echo count($aEmpleados); ?></p>
            </div>
        </div>
    
    </div>
</body>
</html>