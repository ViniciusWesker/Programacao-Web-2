<html>
  <head>
    <title>Exercicio2</title>
  </head>
  <form action="index.php" method="POST">
  
  Digite um número:
    <br>
    <input type="number" name="n1">
  <br>
  <button type="submit">Calcular</button>
  <br>
  <br>
  
  <body>
  
  
  <?php
  
   if($_POST)
   {
    $n1 = $_POST["n1"];
    
    echo "Tabuada: ";
    
    for($x = 1; $x <= 10; $x++)
    {
        $resultado = $n1 * $x;
        echo "<br> $n1 x $x => $resultado";
    }

   }
    
   ?>
    
  </form>
  </body>
</html>