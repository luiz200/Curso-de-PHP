<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $idade = isset($_GET["ano"])?$_GET["ano"]:["não informado"];
      $i = date("Y") - $idade;
      echo "você nasceu em $idade e tem $i<br>";
      if ($i < 16) {
        $votar= "não vota";
      }elseif (($i >= 16 && $i < 18) || ($i > 65)){
          $votar= "voto opicional";
      }
      else {
          $votar="voto obrigatório";
      }
      echo "$votar";

     ?>
  </body>
</html>
