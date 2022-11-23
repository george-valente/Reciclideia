<?php
session_start();
include('conexao.php');

if(empty($_POST['novo_email'])|| empty($_POST['senha'])) {
    header('Location:  config.php');
    exit();
}


$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$novoemail= mysqli_real_escape_string($conexao, ($_POST['novo_email']));

$sql = "UPDATE login SET email = '$novoemail' WHERE senha = md5('$senha')";
 
if($conexao->query($sql) === TRUE) {
    $_SESSION['status_change'] = true;
}

$conexao->close();

header('Location: homepage.php');
exit;
?>
