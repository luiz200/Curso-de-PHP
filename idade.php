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
      if ($i>=18) {
        $votar= sim;
        echo "pode votar: $votar<br>";
        $dirige=sim;
        echo "pode dirigir: $dirige";
      }else{
        $votar=não;
        echo "pode votar: $votar<br>";
        $dirige=não;
        echo "pode dirigir: $dirige";
      }
     ?>
  </body>
</html>
