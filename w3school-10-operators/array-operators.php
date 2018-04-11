<?php
  // Operadores para comparar arrays  -- Fonte: w3school
  
  /*
    Operador ; nome ; exemplo de uso
    
    + ; Union ; $x + $y             */
                                  
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  
    
    print_r($x + $y); // Array ( [a] => red [b] => green [c] => blue [d] => yellow )
    
  /*
    Operador ; nome ; exemplo de uso
    
    == ; Equality ; $x == $y
    retorna true se tiver o mesmo para de chaves e valores   */
    
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x == $y); // bool(false)
    
  /*
    Operador ; nome ; exemplo de uso
    
    === ; Identity ; $x === $y
    retorna true se tiver o mesmo para de chaves e valores
    a mesma order e o mesmo tipo                               */
    
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x === $y); // bool(false)
    
  /*
    Operador ; nome ; exemplo de uso
    
    != ; Inequality ; $x != $y
    retorna true se forem diferes                              */
    
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x != $y); // bool(true)
    
  /*
    Operador ; nome ; exemplo de uso
    
    <> ; Inequality ; 	$x <> $y
    Returns true if $x is not equal to $y                       */
    
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x <> $y); // bool(true)
    
  /*
    Operador ; nome ; exemplo de uso
    
    !== ; Non-identity ; 	$x !== $y
    Returns true if $x is not identical to $y                  */
    
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    var_dump($x !== $y); // bool(true)
      
 
    
   
    
    
    
    
    
    
    
    
?>