<form action="index.php?modulo=usuarios&op=3c67c9b854beb45203a0a6a835ceb142370e80de" method="post">
  <input type="hidden" id="id" name="id" value="{$id}">
  <label for="usuario">Nombre de usuario</label>
  <input type="text" name="usuario" id="usuario" placeholder="Escriba su nombre de usuario" value="{$d_usuario.nombre_usuario}"><br>
  <label for="password">Contraseña</label>
  <input type="password" name="password" id="password" placeholder="Escriba su contraseña" value=""><br>
  <label for="nombre">Nombre completo</label>
  <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre completo" value="{$d_usuario.nombre_completo}"><br>
  <input type="submit" name="btn_usuario" value="{if $id == 0}Crear{else}Modificar{/if}">
</form>
