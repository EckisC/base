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
}
 ?>
