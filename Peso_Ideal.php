<html>
  <head>
    <title>Exercicio3</title>
  </head>
 <body style="background-color:powderblue; font-size:100%;">
  
  <form action="index.php" method="POST">
  
  <b>Digite sua altura sem "." ou ",":</b>
  <br>
  
  Altura: <input type="number" name="altura" step="0.01">
  <br>
  Sexo:
    <input type="radio" name="sexo" value="M">M
    <input type="radio" name="sexo" value="F">F
  <br>
    <button type="submit">Calcular</button>
    <br>
  
    <?php
    
    if ($_POST)
    {
    $altura = $_POST["altura"];
    $sexo = $_POST["sexo"];
    $PesoIdeal = 0;
    
    
    if ($sexo==M)
    {
      $PesoIdeal = ($altura - 100) * 0.90;
    }
    else
    {
      $PesoIdeal = ($altura - 100) * 0.85;
    }
    
    echo "Seu peso ideal é: " .$PesoIdeal. " kg";
    }
    
    ?>
    
  </form>
  
  </body>
</html>