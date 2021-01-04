<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Váriaves -->
    <?php
    /* Váriaves */
      $idade = 3;
      $salario = 198.90;
      $nome = (string)"luiz";
      $casado = false;
      echo $idade." ", $nome." ", $salario;
    /* concatenação */
      echo "<br/> ", $idade. " anos<br/>";
      echo "$idade  anos";
    /* operadores e atribuição */
      $a = 1;
      $b = 3;
      $c = $a+$b;
      $c = $c+5; /* ou */ $c +=5;
      $b = $b+$a; /* ou */ $b +=$a;
      $a = $a+1; /* ou */ $a +=1; /* ou */ $a++;
      echo "<br/>", $c;
      echo "<br/>", $b;
      echo "<br/>", $a;
      /*Exercicio 01 - operadores */
      $preco = $_GET["p"];
      echo "<br/>O preço do produto é R$ ".number_format($preco, 2);
      $preco += ($preco*10/100);
      echo "<br/> E o novo preço com 10% de aumento ".number_format($preco, 2);
      $preco = $_GET["p"];
      $preco -= ($preco*10/100);
      echo "<br/> E o novo preço com 10% de desconto ".number_format($preco, 2);
      /*operadores de incremento */
      $a = 2;
      /*pré-incremento*/
      $a = $a = $a+1; /*ou*/ ++$a;
      echo "<br/>".$a;
      /*pós-incremento*/
      $a = $a = $a+1; /*ou*/ $a++;
      echo "<br/>".$a;
      /*pré-decremento*/
      $a = $a = $a-1; /*ou*/ $a--;
      echo "<br/>".$a;
      /*pós-decremento*/
      $a = $a = $a-1; /*ou*/ --$a;
      echo "<br/>".$a;
      /*Exercicio 02 - incremento */
      $atual = $_GET["aa"];
      echo "<br/>o ano atual é  $atual e o ano anterior é ". --$atual;
      $atual = $_GET["aa"];
      echo "<br/>o ano atual é  $atual e o proxímo ano é ". ++$atual;
      /*Variáveis referenciadas*/
      $a = 3;
      $b = &$a;
      echo "<br/>$a";
      echo "<br/>$b";
      /*Exercicio 03 - Variáveis referenciadas */
      $a = 3;
      $b = $a;
      $b += 5;
      echo "A variavel A vale $a";
      echo "<br/> A  variavel B vale $b";
      /* Variáveis de variáveis */
      $site = "cursoemvideo";
      $$site = "cursoPHP";
      echo "<br/>".$site;
      echo "<br/>".$cursoemvideo;
      /*Exercicio 04 - Variáveis de variáveis */
      $x = "abc";
      $$x = "def";
      echo "<br/>O conteúdo da variavel X é $x";
      echo "<br/>A variavel ABC criada recebeu o valor $abc";
      /*Condições de Mútiplos casos*/
      switch ($op) {
        case 1:
          echo "A";
          break;
        case 2:
          echo "B";
          break;

        default:
          echo "Erro";
          break;
      }
    ?>
  </body>
</html>
