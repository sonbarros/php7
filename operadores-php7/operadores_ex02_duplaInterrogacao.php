<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <?php
    
    // Operador dupla interrogação <=>
    
    $x = null; 
    $z = $x ?? "Valor alternativo";
    // resultado é $z = "Valor alternativo"
   
    /* explicação: 
     * O operador irá verificar se a variavel esta setada 'diferente de null'
     * nesse caso, mantem o valor, e caso sejá null ele irá atribuir o 
     * valor definido no lado direito
     */
     
     // como fariamos antes desse operador
     
     $x = null;
     
     if(isset($x)){
       $y = $x;
     }else{
       $y = "Valor alternativo";
     }
     
  // Aula #2.3 (Prática): Exceções e novidades no PHP 7  
  ?>
  </body>
<html>