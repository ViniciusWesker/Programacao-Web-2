<html>
  <head>
    <title>Exercicio6</title>
  </head>
  <form action="index.php" method="POST">
  

  Digite um número:
  <br>
  
  <input type="number" name="n1">
  <br>
  
  Digite outro número:
  <br>
  
  <input type="number" name="n2">
  <br>
  
  <button type="submit">Calcular</button>
  <br>
  
  
  <body>
  
  
  <?php
  
  if($_POST)
  {
    
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    
    echo "Os números pares entre $n1 e $n2 de forma decrescente: ";
    
    if ($n1 > $n2)
    {
     for($x = $n1; $x >= $n2; $x--)
     {
       if($x % 2 == 0)
       {
         echo "<br>$x";
       }
     }
    }
    else
    {
      for($x = $n2; $x >= $n1; $x--)
     {
       if($x % 2 == 0)
       {
         echo "<br>$x";
       }
     }
    }
  }
?>
    
  </form>
  </body>
</html>