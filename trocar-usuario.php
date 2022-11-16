<?php
      //session_start();
      include('verifica_login.php');
      ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Trocar usuário </title>
        <link rel="stylesheet" type="text/css" href="css/style-trocar-senha.css">
    </head>

    <body>
        <div class="main">
        
            <div class="centralizar">
                <a href="homepage.php"><img class="imagens" width="100px" src="images/logo.png"></a>
   

                    <div class="trocar-senha">
                    
                    <form action="troca_usuario.php" method="post">
                        <label> Trocar usuário </label>
                        <input class="inputForm"  placeholder="Senha" type="password" name="senha">
                <br>
                        <input class="inputForm" placeholder="Novo Usuário" type="text" name="novo_usuario">
                <br>

                        <input type="submit" id="btn-submit" value="Confirmar">
                    </form> <br>
 
                <a id="voltar-config" href="config.php"> Voltar </a>

                

            </div>

        </div>
        
        </div>

    </body>

</html>


