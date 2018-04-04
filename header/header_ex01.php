<?php
  ob_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Header</title>
  </head>
  <body>
  <?php
      
   
    header("Location: http://www.google.com.br"); // encaminha para outra pagina
    
    /*
      Obs.: Em versoes mais antigas do PHP
      voce deve utilizar os comandos ob_start e ob_flush
      no inicio e no final do arquivo, para que funcione o header
     */
    
    
     
  // Aula #2.2 (Prática): A Linguagem PHP ; em 1h14min
  ?>
  </body>
<html>
<?php
  ob_flush();
?>