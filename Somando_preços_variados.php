<html>
  <head>
    <title>Exercicio4</title>
  </head>
  <body>
  <form action="index.php" method="POST">
  
  
  Digite a quantidade de maçãs desejada: <input type="number" name="qtd">
  <button type="submit">Calcular</button>
  <br>
  
  
  <?php 
    
    if ($_POST)
    {
      $resultado = 0;
      $qtd = $_POST["qtd"];
      
      if ($qtd > 23)
      {
        $resultado = $qtd * 0.80;
      }
      else if ($qtd >= 12)
      {
        $resultado = $qtd * 1;
      }
      else if ($qtd <= 11)
      {
        $resultado = $qtd * 1.20;
      }
      
      echo "Valor das maçãs:  R$$resultado";
      
    }
    
  ?>
    
  </form>
  </body>
</html>