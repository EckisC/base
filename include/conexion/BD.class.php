<?php
class BD {
  function query($sql, $regresar_datos = true){
    if ($sql != "") {
      require_once dirname(__file__) . "/conexion.php";
      $oDatos = mysqli_query($conexion, $sql);
      $datos = array();
      if ($regresar_datos) {
        $i = 0;
        while($tmp = mysqli_fetch_assoc($oDatos)){
          $datos[$i++] = $tmp;
        }
      }
      return $datos;
    } else {
      return array();
    }
  }
}
 ?>
