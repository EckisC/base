<?php
require_once dirname(__file__) . "/include/smarty.php";
$modulo = isset($_GET["modulo"]) ? $_GET["modulo"] : "inicio";

$ruta = dirname(__file__) . "/modulos/m_{$modulo}.php";

if (file_exists($ruta)) {
  require_once $ruta;
} else {
  $oSmarty->assign("modulo", $modulo);
  $oSmarty->assign("titulo", "Error Template");
  $oSmarty->assign("contenido", "error_tpl.tpl");
}

$oSmarty->display("layout.tpl");
 ?>
