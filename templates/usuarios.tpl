<div class="row">
  <div class="col">
    <h1>Usuarios</h1>
  </div>
  <div class="col-2">
    <a class="btn btn-primary" href="index.php?modulo=usuarios&op=5043f762841a8c17c7385efd931b64d46ce0b044">Nuevo</a>
  </div>
</div>
<div class="row">
  <div class="col">
    <table class="table table-light table-striped table-hover">
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
            <a class="btn btn-danger" href="index.php?modulo=usuarios&op=602b1e2ac2239bc7e3d85205cca71e9d1d834abe&id={$usuario.usuario_id}">Eliminar</a>
            <a class="btn btn-success" href="index.php?modulo=usuarios&op=5043f762841a8c17c7385efd931b64d46ce0b044&id={$usuario.usuario_id}">Modificar</a>
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
  </div>
</div>
