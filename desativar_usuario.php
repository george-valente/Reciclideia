<?php
session_start();
include('conexao.php');

//não está funcionando.  


//testando a mesma coisa que eu fiz no login
if(empty($_POST['senha'])|| empty($_POST['usuario'])) {
    header('Location:  desativar.html');
    exit();
}
 
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);

$query = "select id, senha from login where senha = md5('{$senha}') and usuario = '{$usuario}'";
 
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
//ainda testando o login 

if($row==1){
    $_SESSION['senha'] = $senha = "DELETE FROM login WHERE senha= '$senha'";
    header('Location: index.html');
    exit();
} else{
    echo "Não foi possível desativar a conta";
}
?>


//a partir daqui já não tenho mais certeza...
/*$id = 6;
$result_usuario = "DELETE FROM login WHERE id_usuario='$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
?> */
