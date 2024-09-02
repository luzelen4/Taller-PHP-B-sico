<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER PHP </title>
</head>
<body>
    <hi>Taller 1 PHP</h1>
    <br> </br>

<?php

// Arreglo asociativo de estudiantes y sus calificaciones
$estudiantes = [
    "Juan" => [85, 78, 92],
    "Ana" => [93, 88, 84],
    "Pedro" => [76, 81, 79],
    "Laura" => [90, 95, 89]
];

// Variable para almacenar el estudiante con el promedio más alto
$mejorEstudiante = "";
$mejorPromedio = 0;

// Recorrer el arreglo para calcular los promedios
foreach ($estudiantes as $nombre => $calificaciones) {
    $suma = array_sum($calificaciones); // Suma de calificaciones
    $cantidad = count($calificaciones); // Cantidad de calificaciones
    $promedio = $suma / $cantidad; // Calcular el promedio

    echo "El promedio de $nombre es $promedio\n"; // Mostrar el promedio de cada estudiante

    // Determinar el estudiante con el promedio más alto
    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}

echo "El estudiante con el promedio más alto es $mejorEstudiante con un promedio de $mejorPromedio.\n";

?>
</body>
</html>
