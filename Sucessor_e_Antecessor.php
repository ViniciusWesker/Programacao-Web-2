<html>
  <head>
    <title>Exercicio2</title>
  </head>
  <body>
  
  <form action="index.php" method="POST">
  
  Digite um número para saber seu sucessor e seu antecessor:
    <br>
    <input type="number" name="n">
  <br>
  <button type="submit">Calcular</button>
  <br>
  
  <?php
  
    $n = $_POST["n"];
    $ant = $n - 1;
    $suc = $n + 1;
    
    if ($_POST)
    {
    echo "O antecessor de $n é: $ant e o sucessor é: $suc";
    }
    
    ?>
    
    </form>
  </body>
</html>