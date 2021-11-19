<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">{*Para garantizar que se tomen las medidas correctas de la ventana del navegador vamos a añadir un metadato para que siempre tome las configuraciones adecuadas*}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$titulo}</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mi_estilo.css">
  </head>
  <body>
    <div class="container">
      {include file="header.tpl"}
      {include file=$contenido}
      {include file="footer.tpl"}
  </div>
  </body>
</html>
