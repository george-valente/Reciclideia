<?php
	session_start(); //-> inicia a sessão
?>

<!DOCTYPE html>
<html>
<head>
  <title>Reciclideia - Chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  
</head>

<body style="font-family:Poppins;">

	<?php 
		//carrega o envio de mensagens
		include("enviar_mensagem.php"); 
	?>

	<!-- iframe é a melhor opção do que o include por causa do reload da página -->
	<iframe src="conversas.php" style="width:100%; height:450px"></iframe>

</body>
</html>
