<?php
class Usuario{
  function listarUsuarios(){
    require_once dirname(__file__) . "/../conexion/BD.class.php";
    $bd = new BD();
    $sql = "SELECT * FROM usuarios";

    return $bd->query($sql);
  }
  function eliminar($id){
    require_once dirname(__file__) . "/../conexion/BD.class.php";
    $bd = new BD();
    $sql = "DELETE FROM usuarios WHERE usuario_id = '{$id}'";
    $bd->query($sql, false);
  }
  function insertar($aDatos){
    require_once dirname(__file__) . "/../conexion/BD.class.php";
    $bd = new BD();

    $nombre_usuario = isset($aDatos['usuario']) ? $aDatos['usuario'] : "";
    $password = isset($aDatos['password']) ? $aDatos['password'] : "";
    $nombre_completo = isset($aDatos['nombre']) ? $aDatos['nombre'] : "";

    $sql = "INSERT INTO usuarios (nombre_usuario, password, nombre_completo, fecha_registro) VALUES ('{$nombre_usuario}', '{$password}', '{$nombre_completo}', '2021-10-22')";
    $bd->query($sql, false);
  }
  function modificar($aDatos){
    require_once dirname(__file__) . "/../conexion/BD.class.php";
    $bd = new BD();

    $id = isset($aDatos['id']) ? $aDatos['id'] : 0;
    $nombre_usuario = isset($aDatos['usuario']) ? $aDatos['usuario'] : "";
    $password = $aDatos['password'] != "" ? ", password = '" . $_POST['password'] . "'" : "";
    $nombre_completo = isset($aDatos['nombre']) ? $aDatos['nombre'] : "";

    $sql = "UPDATE usuarios SET nombre_usuario = '{$nombre_usuario}'{$password}, nombre_completo = '{$nombre_completo}' WHERE usuario_id = '{$id}'";
    $bd->query($sql, false);
  }
  function buscarUsuarioPorId($id){
    require_once dirname(__file__) . "/../conexion/BD.class.php";
    $bd = new BD();
    $sql = "SELECT * FROM usuarios WHERE usuario_id = '{$id}'";

    $tmp = $bd->query($sql);
    return $tmp[0];
  }
}
 ?>
