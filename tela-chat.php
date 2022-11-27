<?php
	session_start(); //deve ser o primeiro codigo php da sua página
	include("dados_conexao.php");
	
	if ($_POST)
	{
		try 
		{   // tenta fazer a conexão e executar o INSERT
			$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
			$comandoSQL = "INSERT INTO tb_usuarios (nome) VALUES ('$_POST[nome]');";
			$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			$grava->execute(array()); 
			$_SESSION['nome_sala'] = $_POST['nome'];
			$_SESSION['cor_nome'] = $_POST['cor'];
			header("Location: sala_bate_papo.php"); //redirecionamento
		} catch(PDOException $e) { // casso retorne erro
			echo('Deu erro: ' . $e->getMessage()); 
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style-chat.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="font-family:Poppins;">

	<div class="container">
	
	<br>
	<div class="well" align="center"><h1><strong>Chat <strong>Reciclideia</strong></h1></div>
	<a href="homepage/homepage.php"> <h1> < </h1> </a>
	
	<form method="post">
	<div class="panel panel-success">
	<div class="panel-heading">Digite seu nome:</div>
	<div class="panel-body">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<input type="text" name="nome" class="form-control" size="10" required>	<br/>
			
			Escolha um cor:
			<input type="color" name="cor">
			
			<br><br>
			
			<div align="center">
				<button type="submit" class="btn btn-success"> Entrar <span class="glyphicon glyphicon-log-in"></span> </button>  
			</div>	
		</div>
		<div class="col-md-4"></div>
	</div>
	</div>
	</form>
	</div>
</body>
</html>