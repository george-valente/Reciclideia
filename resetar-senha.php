<?php
session_start();
include('conexao.php');

if(isset($_POST['resetar-senha']))
{
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM login WHERE  email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conexao, $check_email);

    if(mysqli_num_rows($check_email_run) > 0){
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['nome'];
        $get_email = $row['email'];

        $update_token = "UPDATE login SET verificar_token='$token' WHERE email='$get_email' LIMIT 1";
        $update_token_run = mysqli_query($conexao, $update_token);

        if($update_token_run){
            enviar_resetar($get_name,$get_email,$token);
            $_SESSION['status'] = "Enviamos um código de confirmação";
            header("Location: esqueci-minha-senha.html");
            exit();
        }
    }
    else{
        $_SESSION['status'] = "Alguma coisa deu errado";
        header("Location: esqueci-minha-senha.html");
        exit();
    }
    else{
        $_SESSION['status'] = "Não há E-mail correspondete";
        header("Location: esqueci-minha-senha.html");
        exit();
    }
}

?>