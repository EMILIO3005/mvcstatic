<?php 


//requerimos de la conexion
require_once 'Conexion.php';

//Herencia (Conexion sede su metodo a producto)
class Producto extends Conexion{

  //este atributo contendar la conexion
  private $pdo;

  //Constructor
  public function __construct(){
    //La conexion asigna el acceso a $this->pdo
    $this->pdo = parent::getConexion();
  }

  //Que funciones podemos realizar?
  public function listar(){
    try{
      //1. Crear la consulta sql
      $sql = "
      SELECT 
      id, clasificacion, marca, descripcion, garantia, ingreso, cantidad 
      FROM productos
      ORDER BY id DESC
";
      //2. Enviar la consulta preparada a PDO
      $consulta = $this->pdo->prepare($sql);

      //3. Ejecutar la consulta
      $consulta->execute();

      //4. Entregar resultado
      //fetchALL (coleccion de arreglos)
      //PDO::FETCH_ASSOC (los valores asociativos)
      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      return[];
    }
  }

  public function registrar($registro = []): int{
    try{
      $sql = "
      INSERT INTO productos
        (clasificacion, marca, descripcion, garantia, ingreso, cantidad) VALUES
        (?,?,?,?,?,?)
        ";

        $consulta = $this->pdo->prepare($sql);

        //La consulta, lleva comodines, pasamos los datos en execute()
        $consulta->execute(
          array(
            $registro['clasificacion'],
            $registro['marca'],
            $registro['descripcion'],
            $registro['garantia'],
            $registro['ingreso'],
            $registro['cantidad']
          )
          );

          //Retornar la PK (Primary key) generado
          return $this->pdo->lastInsertId();

    }catch(Exception $e){
      return -1;
    }

  }

  public function eliminar(){

  }

  public function actualizar(){

  }

  public function buscar(){

  }
  
}