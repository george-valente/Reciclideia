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
      <title>Ideias</title>
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
         <a href="about.html">Chat</a>
         <a href="ideias.php">Curso</a>
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
      <!-- ideias -->
      <div class="news padd_rl30">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>Curso de<span> Confecção</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/cofrinho-latadeleite.jpg" alt="#"/></figure> 
                    <h6> (Foto: Reprodução/It Happens in a Blink) </h6>
                    <div class="dist">
                    <h3>Cofrinho com lata de leite</h3>
                    <p>Primeiro nível </p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-cofrinho.php">Tutorial</a>
               </div>
               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/tartarugas-pet.jpg" alt="#"/></figure>
                    <h6>(Foto: goodshomedesign.com)</h6>
                    <div class="dist">
                    <h3>Tartarugas com garrafa PET</h3>
                    <p> Segundo nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-tartarugas.php">Tutorial</a>
               </div>

               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/vaso-vidro.jpg" alt="#"/></figure>
                    <h6>(Fonte: pensamentoverde.com.br)</h6>
                    <div class="dist">
                    <h3>Vaso de flores usando garrafa de vidro </h3>
                    <p>Terceiro nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-vaso.php">Tutorial</a>
               </div>

               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/carrinho-pet.jpg" alt="#" width="500px"/></figure>
                    <h6>(Fonte: artesanatocomgarrafapet.net)</h6>
                    <div class="dist">
                    <h3> Carrinho com garrafa PET</h3>
                    <p>Quarto nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-carrinho.php">Tutorial</a>
               </div>

               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/boneco-rolos.jpg" alt="#"/></figure>
                    <h6>(Fonte: pensamentoverde.com.br)</h6>
                    <div class="dist">
                    <h3>Boneco com rolo de papel higiênico</h3>
                    <p>Quinto nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-vaso.php">Tutorial</a>
               </div>

               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/porcos-copos.jpg" alt="#"/></figure>
                    <h6>(Fonte: Blog Soft Ideias)</h6>
                    <div class="dist">
                    <h3>Porquinhos com copos plásticos </h3>
                    <p>Sexto nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-porquinho.php">Tutorial</a>
               </div>

               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/xicara-copinho.JPG" alt="#"/></figure>
                    <h6>(Fonte: Espaço Educar)</h6>
                    <div class="dist">
                    <h3>Xícaras com pote de iogurte </h3>
                    <p>Sétimo nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-xicara.php">Tutorial</a>
               </div>

               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/cabideiro-vassouras.jpg" alt="#"/></figure>
                    <h6>(Fonte: bangalow.com.br)</h6>
                    <div class="dist">
                    <h3>Cabideiro utilizando cabos de vassoura</h3>
                    <p>Oitavo nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-cabideiro.php">Tutorial</a>
               </div>

               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/pote-decorado.jpg" alt="#"/></figure>
                    <h6>(Fonte: Foto por: Nina Braz)</h6>
                    <div class="dist">
                    <h3>Pote de sorvete decorado</h3>
                    <p>Nono nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-pote.php">Tutorial</a>
               </div>

               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/quadro-caixa.jpg" alt="#"/></figure>
                    <h6>(Fonte: Canal Lorena de Paula/Reprodução/Youtube)</h6>
                    <div class="dist">
                    <h3>Quadro com caixas de sapato </h3>
                    <p>Décimo nível</p>
                    </div>
                  </div>
                  <a class="read_more" href="tutorial-quadro.php">Tutorial</a>
               </div> </br>

            </div>
         </div>

      </div>
      <!-- end news -->
     
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
                           <li><a href="homepage.php">Parceiros</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="Informa conta">
                        <h3>Contatos</h3>
                        <ul>
                           <li> <img src="images/loc.png" alt="#"/> IFAM CMC</li>
                           <li> <a href="Javascript:void(0)"><img src="images/call.png" alt="#"/> ( +92 994499328 )</a></li>
                           <li> <a href="Javascript:void(0)"> <img src="images/mail.png" alt="#"/> reciclideia@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
                 
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="Informa conta">
                        <h3>Redes sociais</h3>
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
                        <p>© 2022 All Rights Reserved. Design by  <a href="https://html.design/"> Free Html Template</a></p>
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
