<?php
  $valor = $_GET["v"];
  echo "o valor enviado foi $valor</br>";
  $raiz = sqrt($valor);
  echo "a raiz quadrada é igual a ".number_format($raiz,2);
 ?>
</br>
<button type="button" name="button">
    <a href="raiz.html">voltar</a>
</button>
