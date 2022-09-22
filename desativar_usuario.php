<?php
session_start();
include('conexao.php');


//testando a mesma coisa que eu fiz no login
if(empty($_POST['senha'])|| empty($_POST['confirmasenha'])) {
    header('Location:  desativar.html');
    exit();
}
 
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$confirmasenha = mysqli_real_escape_string($conexao, $_POST['confirmasenha']);

$query = "select id_usuario, senha from login where senha = md5('{$senha}') and confirmasenha = md5('{$senha}')";
 
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
//ainda testando o login 

if
//a partir daqui já não tenho mais certeza...


 

/*$id = 6;
$result_usuario = "DELETE FROM login WHERE id_usuario='$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
?> */
