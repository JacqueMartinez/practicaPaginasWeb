<?php

class Modelo {

    protected $conexion;
    private $bd = "proyecto";
    private $user = "root";
    private $password = "";

    public function __construct() {
        try {
            $this->conexion = new PDO('mysql:host=localhost;dbname=' . $this->bd, $this->user, $this->password);
            $this->conexion->exec("set character set utf8");
        } catch (Exception $e) {
            var_dump($e);
        }
    }
    
    public function cerrarConexion() {
        $this->conexion = null;
    }

    public function consultaProductos($cantidad = 3) {
        $cantidad = (int) $cantidad;
        $sentencia = $this->conexion->prepare("SELECT * FROM productos order by id_productos desc limit " . $cantidad);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarServicio($cantidad = 3) {
        $cantidad = (int) $cantidad;
        $sentencia = $this->conexion->prepare("SELECT * FROM servicios ");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertarMensaje($nombre, $correo, $telefono, $asunto, $mensaje) {
        $sentencia = $this->conexion->prepare("INSERT INTO formularioc (nombre, correo, telefono, asunto, mensaje) VALUES (?, ?, ?, ?, ?)");
        $sentencia->bindParam(1, $nombre);
        $sentencia->bindParam(2, $correo);
        $sentencia->bindparam(3, $telefono);
        $sentencia->bindparam(4, $asunto);
        $sentencia->bindparam(5, $mensaje);
        return $sentencia->execute();
    }

    public function consultarUsusario($nombre, $contraseña) {
        $sentencia = $this->conexion->prepare("SELECT * FROM admi where nombre=? and contraseña=? ");
        $contraseña = md5($contraseña);
        $sentencia->bindParam(1, $nombre);
        $sentencia->bindParam(2, $contraseña);
        $sentencia->execute();
        foreach ($sentencia->fetchAll(PDO::FETCH_ASSOC) as $persona) {
            return $persona;
        }
    }

}

/* public function consultarPrueba() {
          foreach ($this->conexion->query('SELECT * from FOO') as $fila) {
          echo print_r($fila);
          }
          }

          public function consultar() {
          $valor=50;
          $sentencia = $this->conexion->prepare("select * from alumnos where matricula>?");
          $sentencia->bindparem (1,$valor);
          $sentencia->execute();
          $reg= $sentencia->fetchAll(PDO:: FETCH_ASSOC);
          foreach ($reg as $r){
          echo $r["nombre"]. "matricula" . $r["matricula"] . "<hr>";
          }
          } */