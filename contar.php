<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aNotas = array(9, 8, 9.50, 4, 7, 8);


$aEmpleados = array();
$aEmpleados[] = array("dni" => 33765012, "nombre" => "Ana Acuña", "bruto" => 60000);
$aEmpleados[] = array("dni" => 23684385, "nombre" => "Gonzalo Bustamante", "bruto" => 75000);
$aEmpleados[] = array("dni" => 23645987, "nombre" => "Juan Irraola", "bruto" => 70000);
$aEmpleados[] = array("dni" => 21463213, "nombre" => "Beatriz Ocampo", "bruto" => 110000);

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


function contar($aArray){
    $cont = 0;
    foreach ($aArray as $item) {
        $cont++;
    }
    return $cont;
}

echo "Cantidad de productos: " .contar($aProductos) . "<br>";
echo "Cantidad de pacientes: " .contar($aEmpleados) . "<br>";
echo "Cantidad de notas: " .contar($aNotas);

?>