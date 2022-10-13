<?php
      //session_start();
      include('verifica_login.php');
      ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Configurações </title>
        <link rel="stylesheet" type="text/css" href="css/style-config.css">
    </head>

    <body>
        <div class="main">
        
            <div class="centralizar">

                <div id="area-de-voltar"> 
                    <img width="40px" src="images/voltar.png">
                </div>

        <h2>Meu Perfil</h2> 

        <div id="imagem-perfil">
        <img src="images/foto-perfil.png"> <br> 
        </div>

        <div class="config"></div>


                    <form action="" method="post">
                        <input class="inputForm" placeholder="Trocar Usuário" type="text" name="usuario">
                 <br> 
                        <input class="inputForm"  placeholder="Trocar E-mail" type="text" name="email">
                <br>

                        <input type="submit" id="btn-submit" value="Atualizar informações">
                    </form> <br>

                
                    <a id="sair-conta" href="teste.php"> Sair </a> 
                    <a id="desativar-conta" href="desativar.html"> Desativar minha conta </a> 
                    <a id="trocar-senha" href="trocar-senha.php">Trocar senha</a> 

                </div>
                


            </div>

        </body>
</html>