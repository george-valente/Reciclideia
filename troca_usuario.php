<?php
session_start();
include('conexao.php');

if(empty($_POST['novo_usuario'])|| empty($_POST['senha'])) {
    header('Location:  trocar-usuario.php');
    exit();
}


$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$novousuario= mysqli_real_escape_string($conexao, ($_POST['novo_usuario']));

$sql = "UPDATE login SET usuario = '$novousuario' WHERE senha = md5('{$senha}')'";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_change'] = true;
}

$conexao->close();

header('Location: config.php');
exit;
?>

