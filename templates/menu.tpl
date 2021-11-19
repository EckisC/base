
<nav>{*Vamos a modificar nuestro menu para que se integre por completo al modelo responsivo*}
{*En este caso vamos a utilizar esta estiqueta, hay formas mas simples de hacerlo*}
</nav>
{*Por ejemplo: utilizando una lista sin ordnen*}
<ul class="nav nav-tabs">{*Podemos cambiar la forma del menu, ahora si se observa la oción activa*}
  <li class="nav-item"><a class="nav-link{if $menu == "inicio"} active{/if}" href="index.php">Inicio</a></li>{*Vamos a revisar el cambio que aplica estas clases, como se observa ya estan acomodadas lasopciones en una sola linea, solo que sin ningún espacio, ahora si se ve como un menu xD. Hay una clase para indicar la opcion del menu seleccionada, en este caso vamos a  aprovechar a Smarty para ir haciendo este cambio*}
  <li class="nav-item"><a class="nav-link{if $menu == "pagina1"} active{/if}" href="index.php?modulo=pag1">Página 1</a></li>
  <li class="nav-item"><a class="nav-link{if $menu == "pagina2"} active{/if}" href="index.php?modulo=pag2">Página 2</a></li>
  <li class="nav-item"><a class="nav-link{if $menu == "usuarios"} active{/if}" href="index.php?modulo=usuarios">Usuarios</a></li>
  <li class="nav-item"><a class="nav-link{if $menu == "login"} active{/if}" href="index.php?modulo=login">Login</a></li>
</ul>
<br>{*Vamos a dejarle hasta aquí, y en un video que les hare llegar a parte de este, haré la configuración para utilizar la etiqueta nav*}
