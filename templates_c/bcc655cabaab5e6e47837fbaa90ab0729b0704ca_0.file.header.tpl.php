<?php
/* Smarty version 3.1.39, created on 2021-09-24 21:56:14
  from 'C:\xampp\htdocs\base\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614e2d5ea573c0_96414211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcc655cabaab5e6e47837fbaa90ab0729b0704ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\base\\templates\\header.tpl',
      1 => 1632513371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_614e2d5ea573c0_96414211 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Mi página web PHP - Smarty [<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
]</h2>
<hr>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
