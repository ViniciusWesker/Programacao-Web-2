<html>
  <head>
    <title>Exercicio6</title>
  </head>
  <body>
  <form action="index.php" method="POST">
  
  
  <?php
  
  date_default_timezone_set('America/Sao_Paulo');
    
  $hora = date('H');
  $minuto = date('i');
  
  if($hora >=6 && $hora < 12)
  {
    echo "Bom dia!";
    
  }
  else if($hora >= 12 && $hora <18)
  {
    echo "Boa tarde!";
    
  }
  else if ($hora >= 18 && $hora <=23)
  {
    echo "Boa noite!";
    
  }
  else if ($hora >= 0 && $hora < 6)
  {
    echo "Corujão!";
  }
  
  echo "<br> São: $hora horas e $minuto minutos.";
  
  ?>
    
    
  </form>
  </body>
</html>