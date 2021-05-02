<html>
<body style="background-color:powderblue; font-size:100%;">
<form method="POST">
<h2>QUIZ</h2>
Digite seu email e responda as perguntas a seguir para testar seus conhecimentos (o resultado  também será enviado no seu email):
  <br>
  <br>
  Email: <input type="text" name="email">
  <br>
  <br>
<b>1) Quais desses astros deixou de ser considerado um planeta em nosso sistema solar?</b>
<br>
<input type="radio" name="pergunta1" value="1">Marte.
<br>
<input type="radio" name="pergunta1" value="2">Saturno.
<br>
<input type="radio" name="pergunta1" value="3">Plutão.
<br>
<input type="radio" name="pergunta1" value="4">Terra.
<br>
<input type="radio" name="pergunta1" value="5">Vênus.
<br>
<br>
<b>2) Qual é o nome da pigmentação que dá a coloração verde para os vegetais?</b>
<br>
<input type="radio" name="pergunta2" value="1">Clorofila.
<br>
<input type="radio" name="pergunta2" value="2">Carotenóide.
<br>
<input type="radio" name="pergunta2" value="3">Flavonóide.
<br>
<input type="radio" name="pergunta2" value="4">Melanina.
<br>
<input type="radio" name="pergunta2" value="5">Fosforescente.
<br>
<br>
<b>3) Quais desses animais não é um mamífero?</b>
<br>
<input type="radio" name="pergunta3" value="1">Vaca.
<br>
<input type="radio" name="pergunta3" value="2">Golfinho.
<br>
<input type="radio" name="pergunta3" value="3">Gato.
<br>
<input type="radio" name="pergunta3" value="4">Raposa.
<br>
<input type="radio" name="pergunta3" value="5">Tartaruga.
<br>
<br>
<b>4) Quantas patas ou tentáculos possui um Octópode?</b>
<br>
<input type="radio" name="pergunta4" value="1">5.
<br>
<input type="radio" name="pergunta4" value="2">8.
<br>
<input type="radio" name="pergunta4" value="3">2.
<br>
<input type="radio" name="pergunta4" value="4">12.
<br>
<input type="radio" name="pergunta4" value="5">9.
<br>
<br>
<b>5) Qual o número mínimo de jogadores numa partida de futebol?</b>
<br>
<input type="radio" name="pergunta5" value="1">8.
<br>
<input type="radio" name="pergunta5" value="2">10.
<br>
<input type="radio" name="pergunta5" value="3">9.
<br>
<input type="radio" name="pergunta5" value="4">5.
<br>
<input type="radio" name="pergunta5" value="5">7.
<br>
<br>
<button type="submit">Enviar</button>
<br>

<?php

if($_POST)
{
$email = $_POST["email"];
$pergunta1 = $_POST["pergunta1"];
$pergunta2 = $_POST["pergunta2"];
$pergunta3 = $_POST["pergunta3"];
$pergunta4 = $_POST["pergunta4"];
$pergunta5 = $_POST["pergunta5"];
$certos = 0;
$errados = 0;
$assunto = "Quiz";
$texto ="Olá!
Esse é o resultado do seu Quiz:
Você acertou: " .$certos. "
Você errou: " .$errados. "
Obrigado por participar!";

if($pergunta1==3)
{
  $certos++;
}
else
{
  $errados++;
}

if($pergunta2==1)
{
  $certos++;
}
else
{
  $errados++;
}

if($pergunta3==5)
{
  $certos++;
}
else
{
  $errados++;
}

if($pergunta4==2)
{
  $certos++;
}
else
{
  $errados++;
}

if($pergunta5==5)
{
  $certos++;
}
else
{
  $errados++;
}

echo "<br><b>Resultado:</b><br>
Você acertou: " .$certos."<br>
Você errou: " .$errados;

if(mail($email,$assunto,$texto))
{
  echo "<br>Seu resultado também foi enviado ao seu email!";
}
else
{
  echo "<br>Não foi possível enviar o resultado para seu email.";
}


}

?>


</form>
</body>
</html>