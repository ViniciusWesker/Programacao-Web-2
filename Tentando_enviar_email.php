<html>
<meta charset="utf-8">
<head>
<title>email</title>
</head>
<body>
<form method="POST">
<b>Nome:</b><input type="text" name="nome">
<br>
<b>email:</b><input type="text" name="email">
<br>
<b>Assunto:</b>
<select name="assunto">
<option value="duvida">Dúvida</option>
<option value="critica">Crítica</option>
<option value="elogio">Elogio</option>
</select>
<br>
<b>Mensagem:</b>
<br>
<textarea name="msg"></textarea>
<br>
<button type="submit">Enviar</button>
<br>
  
<?php

if($_POST)
{
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $assunto = $_POST["assunto"];
  $msg = $_POST["msg"];

  $texto = 
  "
  Mensagem recebida em: ".date("d/m/Y")." às ".date("h:m:s")."
  <br>
  Nome: ".$nome."
  <br>
  Email: ".$email."
  <br>
  Assunto: ".$assunto."
  <br>
  Mensagem:
  <br>
  ".$msg;
  if(mail("vlima12.vl@gmail.com", $assunto, $texto, "from: $email"))
  {
  echo "Mensagem enviada com sucesso!";
  }
  else
  {
  echo "Erro ao enviar mensagem. Tente novamente!";
  }
  
  }

?>
 
</form>
</body>
</html>
