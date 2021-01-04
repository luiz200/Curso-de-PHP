<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
      $ano = isset($_GET["ano"])?$_GET["ano"]:0;
      $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
      $idade = date("Y") - $ano;
      echo "$nome é $sexo e tem $idade anos.";
     ?>
  </body>
</html>
