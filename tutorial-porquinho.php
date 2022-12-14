<?php
      //session_start();
      include('verifica_login.php');
      ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Tutorial</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="homepage.php">Home</a>
        <a class="active" href="about.html">Chat</a>
        <a href="ideias.php"">Curso</a>
        <a href="config.php">Configurações</a>
    </div>
    <div class="top_main">
        <div class="head_top">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">
                    <div class="logo">
                        <a href="homepage.php">Reciclideia</a>
                    </div>
                </div>

                <ul class="email text_align_right">
                    <li> <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button></li>
                </ul>
            </header>
        </div>
        <!-- end header -->
        <!-- start slider section -->
        <div class="right_main">

            <!-- end slider section -->

            <!-- about -->
            <div class="about padd_rl30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage text_align_left">
                                <h2>Porquinhos com <span> copos de plástico</span></h2>
                                <p>Faça esse simples artesanato com copos de plástico</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="about_text text_align_left">
                                <h2>Materiais</h2> <br>
                                <ul>
                                    <li>2 copos de plástico;</li>
                                    <li>E.V.A rosa e preto (cor fica a critério);</li>
                                    <li>Pincéis;</li>
                                    <li>Cola quente;</li>
                                </ul>
                                </br>
                                <h2>Passo a passo</h2>
                                </br>

                                <ol>
                                    <li>Recorte o E.V.A no formato das orelhas e das patas do porquinho</li>
                                    <li>Cole os dois copos com a cola quente </li>
                                    <li>Cole as patas e as orelhas</li>
                                    <li>Desenhe os olhos, o nariz e a boca</li>
                                    <li>E está pronto!</li>
                                </ol>
                                </br>
                                <a class="read_more" href="ideias.php"">Concluído</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about_img">
                                <figure><img class="img_responsive" src="images/porcos-copos.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->

            <!-- footer -->
            <footer>
                <div class="footer padd_rl30">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="Informa helpful">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="homepage.php">Início</a></li>
                                        <li><a href="homepage.php">Serviços</a></li>
                                        <li><a href="homepage.php">Sobre</a></li>
                                        <li><a href="homepage.php">Notícias</a></li>
                                        <li><a href="homepage.php #parceiros">Parceiros</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="Informa conta">
                                    <h3>Contatos</h3>
                                    <ul>
                                        <li> <img src="images/loc.png" alt="#" /> IFAM CMC</li>
                                        <li>
                                            <a href="Javascript:void(0)"><img src="images/call.png" alt="#" /> ( +92 994499328 )</a>
                                        </li>
                                        <li>
                                            <a href="Javascript:void(0)"> <img src="images/mail.png" alt="#" /> reciclideia@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="Informa conta">
                                    <h3>Redes Sociais</h3>
                                    <ul class="social_icon text_align_center">
                                        <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                                        <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                        <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="Informa helpful">
                                    <h3>Jornal</h3>
                                    <form class="newslatter_form">
                                        <input class="ente" placeholder="Digite seu E-mail" type="text" name="Enter your email">
                                        <button class="subs_btn">Inscrever-se</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright text_align_center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <p>© 2022 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Template</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>