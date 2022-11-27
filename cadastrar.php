<?php
session_start();
include("conexao.php");


/*variáveis utilizadas para o cadastro do usuário, sendo passadas com o mysqli que limpa a string a ser passada 
para o banco de dados*/
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

//comando sql que verifica se esse usuário já não está cadastrado no banco
$sql="select count(*) as total from login where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

/*se ele achar algum registro, ou seja linha igual a 1, o usuário já existe
e o cadastro não é concluído*/
if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.html');
    exit;
}

//comando sql que insere na tabela login os valores que foram preenchidos em cada campo para o banco de dados
$sql = "INSERT INTO login (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha')";


if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
//se comando foi bem sucedido, volta para index onde o usuário pode fazer o login
header('Location: index.html');
exit;
?>





