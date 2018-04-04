<!DOCTYPE html>
<html>
  <head>
    <title>A linguagem Php - Operações Matematicas</title>
  </head>
  <body>
  <?php

    /* sintaxe
     * Primeiro Parametro : O valor base para o calculo, ou a variavel
     * Segundo Parametro : Quantidade de casas decimais
     * Terceiro Paramentro : O modo que será utilizado no processo de arredondamento
     */
     
    echo round(5.5, 0, PHP_ROUND_HALF_DOWN); // Arredonda para baixo, Resultado: 5
    echo round(5.5, 0, PHP_ROUND_HALF_UP); // Arredonda para baixo, Resultado: 6
    echo round(5.5, 0, PHP_ROUND_HALF_EVEN); // Arredonda para um valor PAR, Resultado: 6
    echo round(5.5, 0, PHP_ROUND_HALF_ODD); // Arredonda para um valor IMPAR, Resultado: 5

    // Exemplos com mais casas decimais

    echo round(5.55, 1, PHP_ROUND_HALF_DOWN); // Arredonda para baixo, Resultado: 5,5
    echo round(5.55, 1, PHP_ROUND_HALF_UP); // Arredonda para baixo, Resultado: 5,6
    echo round(5.55, 1, PHP_ROUND_HALF_EVEN); // Arredonda para um valor PAR, Resultado: 5,6
    echo round(5.55, 1, PHP_ROUND_HALF_ODD); // Arredonda para um valor IMPAR, Resultado: 5,5
     
  // Aula #2.2 (Prática): A Linguagem PHP  
  ?>
  </body>
<html>