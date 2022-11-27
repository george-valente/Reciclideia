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
  <meta http-equiv="refresh" content="5">
  
  
</head>
<body style="font-family:Poppins;">

<?php
	include("dados_conexao.php");	// carrega os dados da conexão.
	try
	{
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
		$consultaSQL = "SELECT * FROM tb_mensagens ORDER BY id_mensagem DESC LIMIT 50";
		$exComando = $conecta->prepare($consultaSQL); //testa o comando
		$exComando->execute(array());
		
		echo('<table class="table table-striped table-bordered table-hover">
				<tr><th> De </th><th> Para </th><th> Mensagem </th></tr>');
			// cria as linhas da tabela, cada linha é um registro do banco.
			foreach($exComando as $resultado) 
			{
				echo("
				<tr>
					<td><span style='color:$_SESSION[cor_nome]'>$resultado[de]</span></td> 
					<td>$resultado[para]</td> 
					<td>$resultado[mensagem]</td>
				</tr>"); //nome na cor escolhida.
			}
		echo('</table>');		
	}catch(PDOException $erro)
	{
		echo("Erro: " . $erro->getMessage());
	}

?>
</body>
</html>