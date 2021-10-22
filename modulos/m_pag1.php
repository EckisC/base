<?php
$nombre = "Erick";
$apellido_paterno = "Hernández";

$oSmarty->assign("nombre", $nombre . " " . $apellido_paterno);
$oSmarty->assign("valor", 6254.2145);
$oSmarty->assign("datos", array("A", "B", "C", "D", "E", "F"));

$oSmarty->assign("titulo", "Página 1");
$oSmarty->assign("contenido", "pag1.tpl");
?>
