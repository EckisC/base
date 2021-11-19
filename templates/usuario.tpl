<div class="row justify-content-center">{*Aquí estoy definiendo que el contenido del bloque de tamaño 8 se centre en el contenedor principal*}
  <div class="col-8">
    <form action="index.php?modulo=usuarios&op=3c67c9b854beb45203a0a6a835ceb142370e80de" method="post">
      <input type="hidden" id="id" name="id" value="{$id}">
      <div class="mb-3">{*Aquí estamos definiendo la separación entre campos del formulario*}
        <label for="usuario" class="form-label">Nombre de usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Escriba su nombre de usuario" value="{$d_usuario.nombre_usuario}">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Escriba su contraseña" value="">
        {if $id != 0}{*Colocamos un texto como parte del campo password para indicar si desea actualizar el password se coloque el nuevo (Nota: Los comentarios de smarty no son enviados al navegador)*}
          <div class="form-text">
            Si deseas cambiar el password coloca uno nuevo.
          </div>
        {/if}
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre completo</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe tu nombre completo" value="{$d_usuario.nombre_completo}">
      </div>
      <input type="submit" name="btn_usuario" class="btn btn-info" value="{if $id == 0}Crear{else}Modificar{/if}">{*Vamos a aplicar este tipo de validaciones a nivel de html5 y bootstrap, por el momento nos enfocaremos a trabajar con javascript y despues la parte visual, la razon es por que siempre hay que tener ambas validaciones para garantizar la integridad del mismo, por otro lado se aplicará tambien alidaciones del lado del modulo, mientras solo estaremos aplicando los estilos responsivos*}
    </form>
  </div>
</div>
