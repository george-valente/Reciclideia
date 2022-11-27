<?php
	// Carrega os dados da conexão!
	include("dados_conexao.php"); 
	
	if ($_POST) //Verifica se o botão de submit foi acionado
	{
		try { // tenta fazer a conexão e executar o INSERT
			$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
			$comandoSQL = "INSERT INTO tb_mensagens (de, para, mensagem) VALUES ('$_POST[txt_de]', '$_POST[txt_para]', '$_POST[txt_mensagem]');";
			$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			$grava->execute(array()); 			
		} catch(PDOException $e) { // caso retorne erro
			echo('Deu erro: ' . $e->getMessage()); 
		}
	} 
?>

<div class="col-md-10">
<form method="post" class="form-in-line">

	<label for="txt_de"> De: </label>
	
	<!-- o atributo readyonly para proibe a digitação pelo usuário -->
	<input type="text" name="txt_de" required value="<?php echo $_SESSION['nome_sala'];  ?>" readonly>
	
	
	<?php
	try{
			$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
			$consultaSQL = "SELECT * FROM tb_usuarios ORDER BY nome";
			$exComando = $conecta->prepare($consultaSQL); //testa o comando
			$exComando->execute(array());
		}
		catch(PDOException $erro){
			echo("Errrooooo! foi esse: " . $erro->getMessage());
		}

?>
	
	<label for="txt_para"> Para: </label>
	<input list="txt_para" name="txt_para" />
		<datalist id="txt_para">		
			<?php
			// carrega a lista de acordo com o registros da tabela.
			foreach($exComando as $resultado)
				{
					echo("<option value=$resultado[nome]>");
				}
			?>			
		</datalist>
	
	
		<br>
	<label for="txt_mensagem"> Mensagem: </label>
	<input type="text" name="txt_mensagem" size="100"  required>

	<button type="submit" class="btn btn-success"> Enviar </button>
</div>
<div class="col-md-2">
	<a href="sair.php">
		<button type="button" class="btn btn-danger"> Sair </button>
	</a>
</div>
	
</form>