<?php
session_start();
include('conexao.php');

if(empty($_POST['senha'])) {
    header('Location:  desativar.html');
    exit();
}

$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$sql = "DELETE FROM login  WHERE senha = md5('{$senha}')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_delete'] = true;
}

$conexao->close();

header('Location: conta-desativada.html');
exit;
?>


