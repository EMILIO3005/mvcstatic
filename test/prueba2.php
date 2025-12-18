<?php

require_once '../app/models/Producto.php';
$producto = new Producto();

//Antes de utilizar el metodo, creamos un array con los nuevos datos

$datos = [
  "clasificacion" => "Equipo",
  "marca" => "Lenovo",
  "descripcion" => "Intel Core i7",
  "garantia" => 12,
  "ingreso" => "2025-05-12",
  "cantidad" => 10
];
print_r($producto->registrar($datos));