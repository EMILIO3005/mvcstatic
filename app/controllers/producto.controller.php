<?php


//Nesecita del modelom para poder responder

require_once '../models/Producto.php';

$producto = new Producto();

//¿Que operacion desea realizar el usuario?
//consulta, registro, actualizar, eliminar, buscar ¿?


//isset()   :funcion que determina si un objeto existe, fue definido
//$_POST['']  :permite interactuar con valores que envia la vista

//JSON      :JavaScrip object Notation
//Mecanismo de intercambio de datos

if (isset($_POST['operacion'])){

  //El usuario me envio una tarea...
  switch ($_POST['operacion']){
    case 'lista':
      $registros = $producto->listar();
      echo json_encode($registros);
      //Algoritmo..
      break;
    case 'registrar':
      //Algoritmo..
      break;
    case 'actualizar':
      //Algoritmo..
      break;
    case 'eliminar':
      //Algoritmo..
      break;
  }
}
