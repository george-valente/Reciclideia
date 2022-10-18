<?php
      //session_start();
      include('verifica_login.php');
      ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Desativar </title>
        <link rel="stylesheet" type="text/css" href="css/style-trocar-senha.css">
    </head>

    <body>
        <div class="main">
        
            <div class="centralizar">
                <a href="homepage.php"><img class="imagens" width="100px" src="images/logo.png"></a>
   

                    <div class="trocar-senha">
                    
                    <form action="troca_senha.php" method="post">
                        <label> Trocar senha </label>
                        <input class="inputForm"  placeholder="Senha atual" type="password" name="senha">
                <br>
                        <input class="inputForm" placeholder="Nova senha" type="password" name="nova_senha">
                <br>
                        <input class="inputForm" placeholder="Confirme a senha" type="password" name="confirma_senha">
                <br>

                        <input type="submit" id="btn-submit" value="Confirmar">
                    </form> <br>
 
                <a id="voltar-config" href="config.html"> Voltar </a>

                

            </div>

        </div>
        
        </div>

    </body>

</html>


