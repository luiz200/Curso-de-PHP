<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $n = isset($_GET["num"])?$_GET["num"]:0;
      $o = isset($_GET["oper"])?$_GET["oper"]:1;
      switch ($o) {
        case 1:
        /*case2:
        case3:
        essa estrutura pode atribuir o msmo resultado*/
          $r = $n * 2;
          break;

        case 2:
          $r = $n ^ 3;
          break;

        case 3:
          $r = sqrt($n);
          break;

        /*default:
          break;*/
      }
      echo "O resultado da operação é $r";
     ?>
  </body>
</html>
