<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 </title>
</head>
<body>
    <hi>Ejercicio 2 PHP</h1>
    <br> </br>

<?php

// Definir el arreglo asociativo $empleados
$empleados = [
    "empleado1" => [
        "nombre" => "Juan Pérez",
        "salario" => 50000,
        "fecha_contratacion" => "2022-01-15",
        "departamento" => "Ventas"
    ],
    "empleado2" => [
        "nombre" => "Ana García",
        "salario" => 55000,
        "fecha_contratacion" => "2021-06-23",
        "departamento" => "Marketing"
    ],
    "empleado3" => [
        "nombre" => "Carlos López",
        "salario" => 48000,
        "fecha_contratacion" => "2020-03-10",
        "departamento" => "Recursos Humanos"
    ],
    "empleado4" => [
        "nombre" => "María Rodríguez",
        "salario" => 60000,
        "fecha_contratacion" => "2019-09-01",
        "departamento" => "Finanzas"
    ]
];

// Mostrar los nombres de todos los empleados junto con su salario
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado["nombre"] . ", Salario: " . $empleado["salario"] . "\n";
}
?>

</body>
</html>