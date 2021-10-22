Nombre: {$nombre}
<h1>Página 1 - {$valor}</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<ul>
{for $i = 0 to 5}
  <li>{$datos[$i]}</li>
{/for}
</ul>
<br>
<table cellspacing="0" border="1" width="500">
  <tr>
{foreach $datos as $item}
  <th>{$item}</th>
{/foreach}
</tr>
</table>
