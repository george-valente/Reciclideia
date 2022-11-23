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
                <a href="homepage.php"> <h1> < </h1> </a>
                    
                </div>

        <h2>Meu Perfil</h2> 


        <div id="imagem-perfil">
        <img src="images/perfill.png"> <br> 



        <?php
                        echo $_SESSION['usuario'];
                        ?>
        </div> <br>



        <div class="config"></div>


                    <form action="troca_email.php" method="post">

                        <input class="inputForm"  placeholder="Trocar E-mail" type="text" name="novo_email">
                <br>
                        <input class="inputForm"  placeholder="Confirme sua senha" type="password" name="senha">
                <br>

                        <input type="submit" id="btn-submit" value="Atualizar">
                    </form> <br>

                
                    <a id="sair-conta" href="teste.php"> Sair </a> 
                    <a id="desativar-conta" href="desativar.html"> Desativar minha conta </a> 
                    <a id="trocar-senha" href="trocar-usuario.php">Trocar usuário</a> 

                </div>
                
            </div>

        </body>
</html>