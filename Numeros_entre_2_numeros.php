<html>
  <head>
    <title>Exercicio1</title>
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
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    if($n2 < $n1)
    {
        $auxiliar = $n2;
        $n2 = $n1;
        $n1 = $auxiliar;
    }
    
    echo "Os números entre $n1 e $n2 são: ";
    
    for($x = $n1+1; $x < $n2; $x++)
    {
        echo "<br> $x";
    }

   }
    
   ?>
    
  </form>
  </body>
</html>