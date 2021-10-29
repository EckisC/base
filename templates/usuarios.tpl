<h1>Usuarios</h1>
<center>
  <a href="index.php?modulo=usuarios&op=5043f762841a8c17c7385efd931b64d46ce0b044">Nuevo</a>
<table border="1" cellspacing="0" width="500">
  <thead>
    <tr>
      <th>#</th><th>Usuario</th><th>Nombre</th><th>Fecha de Registro</th><th>Operaciones</th>
    </tr>
  </thead>
  <tbody>
    {if !empty($usuarios)}
    {assign var=i value=1}
    {foreach from=$usuarios item=usuario}
    <tr>
      <td>{$i++}</td><td>{$usuario.nombre_usuario}</td><td>{$usuario.nombre_completo}</td><td>{$usuario.fecha_registro}</td><td>
        <a href="index.php?modulo=usuarios&op=602b1e2ac2239bc7e3d85205cca71e9d1d834abe&id={$usuario.usuario_id}">Eliminar</a>
        <a href="index.php?modulo=usuarios&op=5043f762841a8c17c7385efd931b64d46ce0b044&id={$usuario.usuario_id}">Modificar</a>
      </td>
    </tr>
    {/foreach}
    {else}
      <tr>
        <td colspan="5">
          <center><h3>No hay registros aún</h3></center>
        </td>
      </tr>
    {/if}
  </tbody>
</table>
</center>
