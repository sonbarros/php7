<!DOCTYPE html>
<html>
  <head>
    <title>String e funções especiais</title>
  </head>
  
  <body>
    <?php 
      $strExemplo = "Frase composta de exemplo para aula";
      // utilize o ponto '.' para concatenar
      
      $tamanho = strlen($strExemplo); // conta a quantidade de bytes
      $tamanho = strlen(utf8_decode($strExemplo)); /* Para contar a quantidade de caracter utilize o utf8_decode, 
      para não haver problema com caracteres acentuados. */
      
      /* strpos() */
      // Procura o texto dentro da string e retorna a sua posição 
      $posicao = strpos($strExemplo, 'a'); // Retorna: 2

      // Procurando apartir da proxima ocorrencia
      $posicao = strpos($strExemplo, 'a', 3) // Retorna: 13
      
      // Posso utilizar um laço de repetição para checar toda string
      $posicao = strpos($strExemplo, 'a');
      while($posicao !== FALSE){
        echo 'posição: ' . $posicao;
        $posicao = strpos($strExemplo, 'a', $posicao);
      }
      
      
    // Aula #3.2 (Prática): Strings e Funções Especiais 17:30 min 
    ?>
    
  </body>
</html>