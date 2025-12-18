<?php

//todos los modelos (Logica / motor de la app) requieren acceder
//a la base de datos, esta clase, brindara este acceso.
class Conexion{


  //Atributos

  private $servidor = "localhost";
  private $puerto = "3306";
  private $baseDatos = "tiendaperu";
  private $usuario = "root";
  private $clave = "";

  //Metodo
  public function getConexion(){
    //try catch = manejador de excepciones
    //try (intentar)
    //catch (accidente, error)
    try{
      //La clase PDO permite connectarse a defirentes motores de BD,
      //requiere una configuracion minima y es facil de usar
      $pdo = new PDO(
       "mysql:host={$this->servidor}; port={$this->puerto}; dbname={$this->baseDatos}; charset=UTF8",
       $this->usuario, 
       $this->clave);

      //CONFIGURAR EL MANEJO DE ERRORES EN PDO
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    }catch(Exception $e){
      //Cuando se suscito un error...
      die($e->getMessage());
    }
  }
}