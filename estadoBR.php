<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $e = isset($_GET["estado"])?$_GET["estado"]: "Erro";
      switch ($e) {
        case 'Alagoas':
        case 'Bahia':
        case 'Ceará':
        case 'Maranhão':
        case 'Paraiba':
        case 'Pernambuco':
        case 'Piauí':
        case 'Rio Grande do Norte':
          $r = "Nordeste";
          break;

        case 'Acre':
        case 'Amapá':
        case 'Amazonas':
        case 'Pará':
        case 'Rondônia':
        case 'Roraima':
        case 'Tocantins':
          $r = "Norte";
          break;

        case 'Distrito Federal':
        case 'Goiás':
        case 'Mato Grosso':
        case 'Mato Grosso do Sul':
          $r = "Centro-Oeste";
          break;

        case 'Paraná':
        case 'Santa Catarina':
        case 'Rio Grande do Sul':
          $r = "Sul";
          break;

        case 'São Paulo':
        case 'Rio de Janeiro':
        case 'Minas Gerais':
        case 'Espírito Santo':
          $r = "Sudeste";
          break;

        default:
          break;
      }
      echo "O seu estado, o $e, pertence a região $r.";
     ?>
  </body>
</html>
