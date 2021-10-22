<h1>Usuarios</h1>
<center>
<table border="1" cellspacing="0" width="500">
  <thead>
    <tr>
      <th>#</th><th>Usuario</th><th>Nombre</th><th>Fecha de Registro</th><th>Operaciones</th>
    </tr>
  </thead>
  <tbody>
    {assign var=i value=1}
    {foreach from=$usuarios item=usuario}
    <tr>
      <td>{$i++}</td><td>{$usuario.nombre_usuario}</td><td>{$usuario.nombre_completo}</td><td>{$usuario.fecha_registro}</td><td><a href="index.php?modulo=usuarios&op=602b1e2ac2239bc7e3d85205cca71e9d1d834abe&id={$usuario.usuario_id}">Eliminar</a></td>
    </tr>
    {/foreach}
  </tbody>
</table>
</center>
