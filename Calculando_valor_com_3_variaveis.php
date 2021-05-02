<html>
  <head>
    <title>Exercicio5</title>
  </head>
  <body>
  
  <form action="index.php" method="POST">
  
  <h3>Calculo de Gastos:</h3>
    <br>
    Consumo médio de combustível (km/l): 
      <input type="number" name="consumo" step="0.01">
    <br>
    Distância a percorrer (km): 
      <input type="number" name="distancia" step="0.01">
    <br>
    Preço do litro: 
    <br>
    <input type="number" name="preco" step="0.01">
    <br>
    <button type="submit">Calcular</button>
    <br>
  
  <?php
  
  if ($_POST)
  {
    $consumo = $_POST["consumo"];
    $distancia = $_POST["distancia"];
    $preco = $_POST["preco"];
    $resultado = 0;
    
    $resultado = $distancia / $consumo * $preco;
    
    echo"Você gastará: R$$resultado";
  }
  
  ?>
  
  
  </form>
  </body>
</html>