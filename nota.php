<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:["não informado"];
      $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:["não informado"];
      $media = (($nota1+$nota2)/2);
      echo "A média entre " .number_format($nota1, 1);
      echo " e ".number_format($nota2, 1);
      echo " é igual a ".number_format($media,1);
      echo "<br>";
      if ($media < 4) {
        $sit = "reprovado";
      }
      elseif($media >= 4 && $media < 5.9){
        $sit = "recuperação";
      }
      else{
        $sit = "aprovado";
      }
      echo " a situaçao do aluno é: $sit";
     ?>
  </body>
</html>
