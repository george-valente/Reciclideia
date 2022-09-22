<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="css/style-index.css">
    </head>

    <body>

        <div class="main">
        
            <div class="centralizar">
                <img class="imagens" width="100px" src="images/logo.png">
   

                    <div class="login"></div>

                    <form action="login.php" method="post">
                        <label> Fazer login </label>
                        <input class="inputForm" id="usuario" placeholder="Usuário" type="text" name="usuario">
                <br> 
                        <input class="inputForm" id="senha" placeholder="Senha" type="password" name="senha">
                <br>
                        <input type="submit" id="btn-submit" value="Fazer Login" name="submit">
                    </form> 
                <br>

                <div id="links">
                    <a href="esqueci-minha-senha.html">Esqueci minha senha </a> 
                    <a id="cria-conta" href="cadastro.html">Criar conta</a> 
                </div>    
                
            </div>

        </div>

    </body>

</html>
