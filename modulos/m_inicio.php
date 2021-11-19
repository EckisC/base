<?php
$oSmarty->assign("titulo", "Inicio");
//Vamos a crear una variable para poder hacer el cambio dinamico en el menu
//Esto lo vamos a replicar en todos los modulos que necesitemos indiquen una opción
$oSmarty->assign("menu", "inicio");
$oSmarty->assign("contenido", "inicio.tpl");
?>
