<html>
  <head>
    <title>Exercicio3</title>
  </head>
  <form action="index.php" method="POST">
  
  Digite um número:
    <br>
    <input type="number" name="n1">
  <br>
  <button type="submit">Calcular</button>
  <br>
  
  <body>
  
  
  <?php
  
   if($_POST)
   {
    $n1 = $_POST["n1"];
    
    for($x = $n1; $x >= 0; $x--)
    {
        echo "<br> $x";
    }

   }
    
   ?>
    
  </form>
  </body>
</html>