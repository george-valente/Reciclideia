<?php
include('conexao.php');

//testando uma verificação se o email existe
    function verifica_dados($conexao){
        if(isset($_POST['resetar-senha']) && $_POST['resetar-senha'] == "form"){
            $email = addslashes($_POST['email']);
            $sql = $conexao->prepare("SELECT * FROM login WHERE email = ?");
            $sql->bind_param("s", $email);
            $sql->execute();
            $get = $sql->get_result();
            $total = $get->num_rows;

            if($total > 0){
                $dados = $get->fetch_assoc();
                enviar_email($conexao,$dados['email']);
            }else{

            }
        }
    }

    function enviar_email($conexao,$email){
        echo $email;
    }
?>