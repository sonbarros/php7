<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <?php
    
    // Operador spaceship <=>
    
    /* explicação: 
     * o spaceship informará se 'b' esta antes, igual ou depois de 'a'
     * se tiver antes retornará: -1, se for igual retornará: 0 e depois: 1
     *
     */
     
    $x = "b" <=> "a";
    echo $x; // Resultado: 1
    
    $x = "b" <=> "b";
    echo $x; // Resultado: 0
    
    $x = "b" <=> "b";
    echo $x; // Resultado: -1
    
    
    // dica, posso utiliza-lo com switch
    
    switch($x){
      case -1:
        echo "É menor/anterior";
        break;
      case 0:
        echo "É igual";
        break;
       case 1:
        echo "É maior/posterior";
        break;
    }  
    
  //Aula #2.3 (Prática): Exceções e novidades no PHP 7  
  ?>
  </body>
<html>