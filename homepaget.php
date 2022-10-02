<?php
      //session_start();
      include('verifica_login.php');
      ?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Reciclideia</title>
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
   <body class="main-layout">

      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a class="active" href="index.html">Home</a>
         <a href="about.html">Chat</a>
         <a href="service.html">Notícias</a>
         <a href="blog.html">Curiosidades</a>
        <a href="config.html">Configurações</a>
      </div>
      <div class="top_main">
      <div class="head_top">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
                     <div class="logo">
                        <a href="index.html">Reciclideia</a>
                     </div>
                  </div>
                
                     <ul class="email text_align_right">
                        <li> <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button></li>
                        <li> <a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li> <a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                     </ul>
      </header>
    </div>
      <!-- end header -->
      <!-- start slider section -->
      <div class="right_main">
        <div  class=" banner_main">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                <div class="row">
                                   <div class="col-lg-5">
                                     <div class="bluid">
                                      <h1>Reciclideia<br><span>
                                      </span></h1>
                                      <p>Um site que te dá ideias de como fazer confecções utilizando produtos que iriam para o lixo, além de ensinar a fazer o descarte de forma correta!</p>
                                      <a class="read_more" href="#nossos_servicos"> Sobre </a>
                                     </div>
                                   </div>
                                   <div class="col-lg-7">
                                      <div class="pan_img">
                                         <figure><img src="images/logo.png" alt="#"/></figure>
                                      </div>
                                   </div>
                                </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                               <div class="row">
                                   <div class="col-lg-5">
                                     <div class="bluid">
                                      <h1>Sobre o <br><span>Site</span></h1>
                                      <p>Aperte em Sobre para obter mais informações sobre os objetivos e propósitos do site Reciclideia</p>
                                      <a class="read_more" href="#sobre">Sobre </a>
                                     </div>
                                   </div>
                                   <div class="col-lg-7">
                                      <div class="pan_img">
                                         <figure><img src="images/2cup.png" alt="#"/></figure>
                                      </div>
                                   </div>
                                </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                <div class="row">
                                   <div class="col-lg-5">
                                     <div class="bluid">
                                      <h1>Notícias <br><span> 
                                      </span></h1>
                                      <p>Fique por dentro das notícias do Meio ambiente e Reciclagem em Manaus e no Amazonas!</p>
                                      <a class="read_more" href="#noticias">Sobre </a>
                                     </div>
                                   </div>
                                   <div class="col-lg-7">
                                      <div class="pan_img">
                                         <figure><img src="images/2cup.png" alt="#"/></figure>
                                      </div>
                                   </div>
                                </div>
                              </div>
                           </div>
                        </div>
						 <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                <div class="row">
                                   <div class="col-lg-5">
                                     <div class="bluid">
                                      <h1>Equipe <br><span> 
                                      </span></h1>
                                      <p>Equipe de desenvolvedores do Reciclideia</p>
                                      <a class="read_more" href="#equipe">Sobre </a>
                                     </div>
                                   </div>
                                   <div class="col-lg-7">
                                      <div class="pan_img">
                                         <figure><img src="images/2cup.png" alt="#"/></figure>
                                      </div>
                                   </div>
                                </div>
                              </div>
                           </div>
                        </div>
						 <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                <div class="row">
                                   <div class="col-lg-5">
                                     <div class="bluid">
                                      <h1>Parceiros <span>
                                      </span></h1>
                                      <p>Conheça nossos parceiros na Reciclagem. </p>
                                      <a class="read_more" href="#parceiros">Sobre </a>
                                     </div>
                                   </div>
                                   <div class="col-lg-7">
                                      <div class="pan_img">
                                         <figure><img src="images/2cup.png" alt="#"/></figure>
                                      </div>
                                   </div>
                                </div>
                              </div>
                           </div>
                        </div>
						 <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                <div class="row">
                                   <div class="col-lg-5">
                                     <div class="bluid">
                                      <h1>Fale <br><span>Conosco 
                                      </span></h1>
                                      <p>Nos mande sua dúvida ou sugestão, será de grande ajuda!</p>
                                      <a class="read_more" href="#contatos">Sobre </a>
                                     </div>
                                   </div>
                                   <div class="col-lg-7">
                                      <div class="pan_img">
                                         <figure><img src="images/2cup.png" alt="#"/></figure>
                                      </div>
                                   </div>
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
        </div>
      <!-- end slider section -->
       <!-- services -->
	  <a name="nossos_servicos"></a>
      <div class="services padd_rl30">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>Nossos <span> serviços</span></h2>
                  </div>
               </div>
            </div>
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="services_text">
                            <i><img src="images/Ideias.png" alt="#"/></i>
                            <h3>Ideias de confecções</h3>
                            <p>Confira aqui ideias do que fazer com materais que você descartaria</p>
                            </div>
                           <a class="read_more" href="services.html">Descubra mais</a>
                     </div>
                     <div class="col-lg-4">
                        <div class="services_text">
                            <i><img src="images/Chat.png" alt="#"/></i>
                            <h3> Chat para interação</h3>
                            <p>Poste suas confecções com materiais recicláveis e interaja com outros usuários</p>
                            </div>
                           <a class="read_more" href="services.html">Descubra mais</a>
                     </div>
                     <div class="col-lg-4">
                        <div class="services_text">
                            <i><img src="images/PontosC.png" alt="#"/></i>
                            <h3>Pontos de reciclagem</h3>
                            <p>Fique por dentro das notícias sobre a reciclagem em Manaus e no Amazonas</p>
                            </div>
                           <a class="read_more" href="services.html">Descubra mais</a>
                     </div>
                  </div>
               </div>
            </div>
      <!-- end services -->

      <!-- about -->
	  <a name="sobre"></a>
      <div  class="about padd_rl30">
         <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="titlepage text_align_left">
                <h2>Sobre <span>o site</span></h2>
              </div>
            </div>
          </div>
          <div class="row">
               <div class="col-lg-8">
                  <div class="about_text text_align_left">
                        <p>O Reciclideia surgiu pela preocupação com a condição do meio ambiente em Manaus. Através de ideias e notícias, o site tem o objetivo de conscientizar os cidadãos a respeito da grande quantidade de lixo que é jogada, e como reaproveitar alguns materiais.</p>
                       <a class="read_more" href="about.html">Read More</a>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="about_img">
                     <figure><img class="img_responsive" src="images/logo.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->

      <!-- notícias -->
	  <a name="noticias"></a>
      <div class="locations padd_rl30">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <a name="noticias"></a>
					 <h2>Notícias</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <div class="bearch text_align_left">
                    <figure><img src="images/loca.jpg" alt="#"/></figure>
                    <div class="city">
                    <h3>City wedding</h3>
                    <p>Eum iriure dolor in hendrerit in vulputate velit esse molestie con sequat, vel illum dolore eu </p>
                    </div>
                  </div>
                  <a class="read_more" href="locations.html">Read More</a>
               </div>
               <div class="col-lg-4">
                  <div class="bearch text_align_left">
                    <figure><img src="images/loca1.jpg" alt="#"/></figure>
                    <div class="city">
                    <h3>Beach wedding</h3>
                    <p>Eum iriure dolor in hendrerit in vulputate velit esse molestie con sequat, vel illum dolore eu </p>
                    </div>
                  </div>
                  <a class="read_more" href="locations.html">Read More</a>
               </div>
               <div class="col-lg-4">
                  <div class="bearch text_align_left">
                    <figure><img src="images/loca2.jpg" alt="#"/></figure>
                    <div class="city">
                    <h3>Country wedding</h3>
                    <p>Eum iriure dolor in hendrerit in vulputate velit esse molestie con sequat, vel illum dolore eu </p>
                    </div>
                  </div>
                  <a class="read_more" href="locations.html">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- fim notícias -->

       <!-- equipe -->
       <a name="equipe"></a>
      <div class="clients padd_rl30">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="titlepage text_align_center">
                <h2>Equipe</h2>
              </div>
            </div>
          </div>
         </div>
         <!-- start slider section -->
         <div id="testi" class="carousel slide clients_banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#testi" data-slide-to="0" class="active"></li>
               <li data-target="#testi" data-slide-to="1"></li>
               <li data-target="#testi" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption testi">
                        <div class="row d_flex">
                           <div class="col-md-3">
                              <div class="pro_file">
                                 <i><img class="text_align_right" src="images/test2.png" alt="#"/></i>
                              </div>
                           </div>
                           <div class="col-md-9">
                              <div class="test_box text_align_left">
                                 <h4>Amanda Teles</h4>
                                 <p>Oi! Eu sou a Amanda...</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption testi">
                        <div class="row d_flex">
                           <div class="col-md-3">
                              <div class="pro_file">
                                 <i><img class="text_align_right" src="images/valr.jpg" alt="#"/></i>
                              </div>
                           </div>
                           <div class="col-md-9">
                              <div class="test_box text_align_left">
                                 <h4>George Valente</h4>
                                 <p>Oi! Eu sou o George... </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption testi">
                        <div class="row d_flex">
                           <div class="col-md-3">
                              <div class="pro_file">
                                 <i><img class="text_align_right" src="images/test2.png" alt="#"/></i>
                              </div>
                           </div>
                           <div class="col-md-9">
                              <div class="test_box text_align_left">
                                 <h4>Sarah Vitória</h4>
                                 <p>Oi! Eu sou a Vitória... </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#testi" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testi" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <!-- fim equipe -->

      <!-- parceiros -->
	  <a name="parceiros"></a>
      <div class="news padd_rl30">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>Parceiros na <span>Reciclagem</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/news1.png" alt="#"/></figure>
                    <div class="dist">
                    <h3>Eader will be distracted by the read</h3>
                    <p>established fact that a rable content of a page when looking at its layout. The point of using Lorem Ipsumeader will be distracted by the read</p>
                    </div>
                  </div>
                  <a class="read_more" href="news.html">Read More</a>
               </div>
               <div class="col-lg-6">
                  <div class="latest text_align_left">
                    <figure><img src="images/news2.png" alt="#"/></figure>
                    <div class="dist">
                    <h3>Eader will be distracted by the read</h3>
                    <p>established fact that a rable content of a page when looking at its layout. The point of using Lorem Ipsumeader will be distracted by the read</p>
                    </div>
                  </div>
                  <a class="read_more" href="news.html">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- fim parceiros -->
      
      <!-- fale conosco -->
      <a name="contatos"></a>
      <div class="contact padd_rl30">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>Fale Conosco</h2>
                  </div>
               </div>
           </div>
            <div class="row">
               <div class="col-lg-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Seu nome" type="type" name=" Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Celular" type="type" name="Phone Number">                       
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensagem" type="type" Message="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-lg-6">
                  <div class="map-responsive">
                    <iframe src="https://goo.gl/maps/SJF3bj8hyELGZUybA" width="600" height="440" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact -->
      <!-- footer -->
      <footer>
         <div class="footer padd_rl30">
            <div class="container">
               <div class="row">
                
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="Informa helpful">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="index.html">Início</a></li>
                           <li><a href="about.html">Sobre</a></li>
                           <li><a href="service.html">Serviços</a></li>
                           <li><a href="blog.html">Chat</a></li>
                           <li><a href="contact.html">Contato</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="Informa conta">
                        <h3>Contatos</h3>
                        <ul>
                           <li> <img src="images/loc.png" alt="#"/> 104 loram ipusm</li>
                           <li> <a href="Javascript:void(0)"><img src="images/call.png" alt="#"/> ( +71 69582478 )</a></li>
                           <li> <a href="Javascript:void(0)"> <img src="images/mail.png" alt="#"/> reciclideia@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
                 
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="Informa conta">
                        <h3>Social Link</h3>
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
                        <h3>Newsletter</h3>
                         <form class="newslatter_form">
                        <input class="ente" placeholder="Enter Your email" type="text" name="Enter your email">
                        <button class="subs_btn">Subscribe</button>
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
