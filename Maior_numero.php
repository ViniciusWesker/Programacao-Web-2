<html>
  <head>
    <title>Exercicio1</title>
  </head>
  <body>
  
  <form action="index.php" method="POST">
  
   numero 1 <input type="number" name="n1"><br>
   numero 2 <input type="number" name="n2"><br>
   numero 3 <input type="number" name="n3"><br>
   <button type="submit">Qual é o maior?</button>
   <br>
  
    <?php
    
    if($_POST)
    {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    
    if ($n1 > $n2 && $n1 > $n3)
    {
      echo "O maior número é o número 1: $n1";
    }
    else if ($n2 > $n1 && $n2 > $n3)
    {
      echo "O maior número é o  número 2: $n2";
    }
    else if ($n3 > $n1 && $n3 > $n2)
    {
      echo "O maior número é o  número 3: $n3";
    }
    else if ($n1 == $n2 && $n1 != $n3)
    {
       echo "Os maiores números são os 1 e 2: $n1";
    }
    else if ($n1 == $n3 && $n1 != $n2)
    {
       echo "Os maiores números são os 1 e 3: $n1";
    }
    else if ($n2 == $n3 && $n2 != $n1)
    {
      echo "Os maiores números são os 2 e 3: $n2";
    }
    else if ($n1 == $n2 && $n1 == $n3)
    {
      echo "Os números são iguais: $n1";
    }
    }
    
    ?>
    
    </form>
  </body>
</html>