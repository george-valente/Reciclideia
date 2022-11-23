<?php
include('conexao.php');

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!empty($dados['resetar-senha'])) {
    var_dump($dados);
    $query_usuario = "SELECT id, nome, email FROM login WHERE email =:email";
    $result_usuario = $conexao->prepare($query_usuario);
    $result_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $result_usuario->execute();

    if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        $chave_recuperar_senha = password_hash($row_usuario['id'], PASSWORD_DEFAULT);
        echo "Chave $chave_recuperar_senha <br>";

    }

}
?>