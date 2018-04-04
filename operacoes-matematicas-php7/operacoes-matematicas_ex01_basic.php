<!DOCTYPE html>
<html>
  <head>
    <title>A linguagem Php - Operações Matematicas</title>
  </head>
  <body>
  <?php

    $x = 3 + 5;
    $x = 3 - 5;
    $x = 3 * 5;
    $x = 16 / 5;
    $x = 16 % 5; // obtem o resto da divisão
    
    $x = 3;
    $x++; // incrementa um 
    echo $x . "<BR>";
    
    $x = 3;
    ++$x;
    echo $x . "<BR>";
    
    /* Quando utilizamos operadores de atribuição em operações
     *  
     */
    $x = 3;
    $y = 1 + $x++; // operador a direita, primeiro realiza o calculo e depois incrementa
    echo "x = " . $x . " e y = " . $y . "<BR>"; // x = 4, y = 4
    
    $x = 3;
    $y = 1 + ++$x; // operador a esquerda, primeiro incremente e depois realiza o calculo
    echo "x = " . $x . " e y = " . $y . "<BR>"; // x = 4, y = 5
    
    /* Calcula e armazena na propria variavel
     *
     */
    $x = 3;
    $x *= 5; // Resultado: 15
    echo $x . "<BR>";

    $x = 3;
    $x -= 5; // Resultado: -2
    echo $x . "<BR>";
 
     
  // Aula #2.2 (Prática): A Linguagem PHP  
  ?>
  </body>
<html>