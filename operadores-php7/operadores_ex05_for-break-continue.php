<!DOCTYPE html>
<html>
  <head>
    <title>O operador for</title>
  </head>
  <body>
  <?php
    
    // Com o uso de break;
    for($i = 0; $i < 10; $i++){
        
        echo $i . " ";
        
        if($i == 5){
          break;
        }
        // Resultado: 0, 1, 2, 3, 4 e 5
    }
    
    // Com o uso de continue
    for($i = 0; $i < 10; $i++){
        
        if($i == 5){
          continue;
        }
        
        echo $i . " ";
        // Resultado: 0, 1, 2, 3, 4, 6, 7, 8,9
    }
     
  // Aula #2.2 (Prática): A Linguagem PHP ; em 45min
  ?>
  </body>
<html>