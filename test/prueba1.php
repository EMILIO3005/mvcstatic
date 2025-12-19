<?php

//Para salir de una carpeta ../

require_once '../app/models/Producto.php';
$producto = new Producto();

//verifica
print_r($producto->listar());