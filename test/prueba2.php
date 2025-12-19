<?php

require_once '../app/models/Producto.php';
$producto = new Producto();

//Antes de utilizar el metodo, creamos un array con los nuevos datos

$datos = [
  "clasificacion" => "Equipo",
  "marca" => "Samsung",
  "descripcion" => "Tablet 12 pulgadas",
  "garantia" => 36,
  "ingreso" => "2025-01-01",
  "cantidad" => 3,
  "id"       => 1
];
print_r($producto->actualizar($datos));