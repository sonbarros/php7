<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <?php
    
    try{
      /* Como a chamada ao mysql_connect não mais existe no php7
       * vai lançar a exceção, ou seja vai para o bloco catch
       * observação: try/catch já existia no php, porem agora
       * erros fatais do php lançam exceções.
       */
      mysql_connect("localhost");
      
    }catch(Error $e){
      echo "Houve uma falha: " . $e->getMessage();
    }
  ?>
  </body>
<html>