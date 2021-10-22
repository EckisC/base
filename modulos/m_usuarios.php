<?php
include_once dirname(__file__) . "/../include/api/Usuario.class.php";
$oUsuario = new Usuario();

$op = isset($_GET['op']) ? $_GET['op'] : "";

switch ($op) {
  case '602b1e2ac2239bc7e3d85205cca71e9d1d834abe':
        $id = $_GET['id'];
        $oUsuario->eliminar($id);
        header("Location:index.php?modulo=usuarios");
        exit;
    break;

  case '5043f762841a8c17c7385efd931b64d46ce0b044':
        $oSmarty->assign("titulo", "Nuevo usuario");
        $oSmarty->assign("contenido", "usuario.tpl");
    break;

  default:
    $datos = $oUsuario->listarUsuarios();

    $oSmarty->assign("usuarios", $datos);
    $oSmarty->assign("titulo", "Usuarios");
    $oSmarty->assign("contenido", "usuarios.tpl");
    break;
}


?>
