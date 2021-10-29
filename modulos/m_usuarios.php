<?php
include_once dirname(__file__) . "/../include/api/Usuario.class.php";
$oUsuario = new Usuario();

$op = isset($_GET['op']) ? $_GET['op'] : "";

switch ($op) {
  case '602b1e2ac2239bc7e3d85205cca71e9d1d834abe': //eliminar
        $id = $_GET['id'];
        $oUsuario->eliminar($id);
        header("Location:index.php?modulo=usuarios");
        exit;
    break;

  case '5043f762841a8c17c7385efd931b64d46ce0b044': //nuevo o modificar
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $titulo = isset($_GET['id']) ? "Modificar" : "Nuevo";
        $oSmarty->assign("id", $id);
        $oSmarty->assign("titulo", "{$titulo} usuario");
        $oSmarty->assign("contenido", "usuario.tpl");
    break;

  case '3c67c9b854beb45203a0a6a835ceb142370e80de': //guardar
        if ($_POST['id'] == 0) {
          $oUsuario->insertar($_POST);
        } else {
          $oUsuario->modificar($_POST);
        }
        header("Location:index.php?modulo=usuarios");
        exit;
    break;

  default:
    $datos = $oUsuario->listarUsuarios();

    $oSmarty->assign("usuarios", $datos);
    $oSmarty->assign("titulo", "Usuarios");
    $oSmarty->assign("contenido", "usuarios.tpl");
    break;
}


?>
