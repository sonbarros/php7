<!DOCTYPE html>
<html>
  <head>
    <title>Super Variaveis do Php</title>
  </head>
  <body>
  <?php
      
    echo "Iniciando";
    
    
    include("ArquivoAuxiliar.php");
    /*
      include:
      Caso não encontre o arquivo ele segue a execução
      normalmente
     */
    include("ArquivoAuxiliar.php");
    
    include_once("ArquivoAuxiliar.php");
    /*
      include_once :
      Bom para utilizar em laços de repetições, e também 
      se por algum motivo não encontrar o arquivo ele 
      segue a excução sem lançar erro                
     */
    include_once("ArquivoAuxiliar.php");
    
    /*
      require 
      Torna obrigadorio a existencia do arquivo, parando a execução
      caso não encontre o arquivo
     */
    require("ArquivoAuxiliar.php"); 
    require_once("ArquivoAuxiliar.php");
    
    echo "Finalizando";
    
    
     
  // Aula #2.2 (Prática): A Linguagem PHP ; em 60min
  ?>
  </body>
<html>