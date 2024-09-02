<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 </title>
</head>
<body>
    <hi>Ejercicio 3 PHP</h1>
    <br> </br>

<?php


// Definir el arreglo asociativo $productos
$productos = [
    "producto1" => [
        "nombre" => "Camiseta",
        "precio" => 15.99,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => [
                "Buena calidad",
                "Cómoda y duradera"
            ]
        ]
    ],
    "producto2" => [
        "nombre" => "Pantalones",
        "precio" => 29.99,
        "detalles" => [
            "disponibilidad" => false,
            "reseñas" => [
                "Buen ajuste",
                "Color no coincide con la imagen"
            ]
        ]
    ],
    "producto3" => [
        "nombre" => "Zapatos",
        "precio" => 49.99,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => [
                "Muy cómodos",
                "Perfectos para caminar largas distancias"
            ]
        ]
    ],
    "producto4" => [
        "nombre" => "Gorra",
        "precio" => 9.99,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => [
                "Buen precio",
                "Material podría ser mejor"
            ]
        ]
    ]
];

// Mostrar el nombre y el precio de todos los productos que están disponibles
foreach ($productos as $producto) {
    if ($producto["detalles"]["disponibilidad"]) {
        echo "Nombre: " . $producto["nombre"] . ", Precio: $" . $producto["precio"] . "\n";
    }
}

?>
