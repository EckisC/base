<?php
/* Smarty version 3.1.39, created on 2021-10-08 22:21:23
  from 'C:\xampp\htdocs\base\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6160a843821c91_93295034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4825ddc7d5d3835742faf41327548300202e6d46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\base\\templates\\usuarios.tpl',
      1 => 1633724474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6160a843821c91_93295034 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Usuarios</h1>
<center>
<table border="1" cellspacing="0" width="500">
  <thead>
    <tr>
      <th>#</th><th>Usuario</th><th>Nombre</th><th>Fecha de Registro</th><th>Operaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php $_smarty_tpl->_assignInScope('i', 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre_usuario'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre_completo'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['fecha_registro'];?>
</td><td><a href="index.php?modulo=usuarios&op=602b1e2ac2239bc7e3d85205cca71e9d1d834abe&id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario_id'];?>
">Eliminar</a></td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
</center>
<?php }
}
