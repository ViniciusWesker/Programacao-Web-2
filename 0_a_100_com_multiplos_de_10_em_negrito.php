<html>
  <head>
    <title>Exercicio5</title>
  </head>
  
  <form action="index.php" method="POST">
  
  <h5>Números de 0 à 100 com os multiplos de 10 em negrito:</h5>
  
  <body>
  
  
  <?php
  
  for($x = 0; $x <= 100; $x++)
  {
    
    if ($x == 10 || $x == 20 || $x == 30 || $x == 40 || $x == 50 || $x == 60 || $x == 70 || $x == 80 || $x == 90 || $x == 100)
    {
      echo "<b><br>$x</b>";
    }
    else
    {
      echo "<br> $x";
    }
  }
  
  
  ?>
  
  
  </form>
  </body>
</html>