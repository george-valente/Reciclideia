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
      <title>Pontos de coleta</title>
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
         <a href="homepage.php">Notícias</a>
         <a href="homepage.php">Curiosidades</a>
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
      <div  class="about padd_rl30">
         <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="titlepage text_align_left">
                <h2>Pontos de <span> Coleta Seletiva </span> em Manaus</h2>
              </div>
            </div>
          </div>
          <div class="row">
               <div class="col-lg-8">
                  <div class="about_text text_align_left">
                     <h2>Como devo separar meus resíduos?</h2> <br>
                      <ol id="coleta">
                        <li>Separe seus resíduos, como embalagens, papel, plástico, latinhas, secos.</li>
                        <li>Não entregue o resíduo úmido (ou orgânico): restos de alimentos, papel molhado ou plantas. Estes devem descartados no lixo ou utilizados como adubo;</li>
                        <li>Não entregue resíduos sujos;</li>
                        <li>Guarde os resíduos de forma higiênica, até que o caminhão passe para recolher. O ideal é em recipientes fechados;</li>
                        <li>Pilhas, baterais, aparelhos eletrônicos, lâmpadas e resíduos hospitalares não podem ser jogados no lixo e também não servem para coleta seletiva;</li>
                        <li>Leve esses materiais ao Ponto de Entrega voluntária mais próximo de você;</li>
                      </ol> </br>
                      <h2>Onde posso encontrar pontos de entrega em Manaus?</h2> 
                      <h4>Confira abaixo os PEVs em Manaus</h4> <br>

                      <ul> Zona Centro-Sul
                        <li>Supermercado DB, avenida Jornalista Umberto Calderaro, Adrianópolis, zona Centro-Sul</li>
                        <li>Supermercado Vitoria, avenida Torquato Tapajós, Flores, zona Centro-Sul</li>
                        <li>Supermercado Pátio Gourmet, avenida Via Láctea, Aleixo, zona Centro-Sul</li>
                        <li>Supermercado Nova Era, avenida Governador José Lindoso, Novo Aleixo, zona Centro-Sul</li>
                        <li>Supermercado Tribom, Shangrila, Parque 10, zona Centro-Sul</li>
                        <li>Supermercado Veneza, avenida Tancredo Neves, Parque 10, zona Centro-Sul</li>
                        <li>Supermercado Pátio Gourmet, rua Terezinha, Adrianópolis, zona Centro-Sul</li>
                        <li>Supermercado Yroyak, avenida Rio Madeira, Nossa Senhora das Graças, zona Centro-Sul</li>
                        <li>Supermercado Nova Era, avenida Torquato Tapajós, Flores, zona Centro-Sul</li>
                        <li>Supermercado Pátio Gourmet, avenida Djalma Batista, São Geraldo, Chapada, zona Centro-Sul</li>
                        <li> Supermercado Carrefour, avenida Djalma Batista, Flores, zona Centro-Sul</li>
                        <li>Supermercado Carrefour, avenida Jornalista Umberto Calderaro, Adrianópolis, zona Centro-Sul</li>
                        <li>Supermercado Assaí, avenida Efigênio Salles, Aleixo, zona Centro-Sul</li>
                        <li>Supermercado Assaí, avenida Torquato Tapajós, Flores, zona Centro-Sul</li>
                        <li> Hiper DB, avenida Mario Ypiranga, Adrianópolis, zona Centro-Sul</li>
                        <li> PEV Mindu, Parque 10, zona Centro-Sul</li> </br>

                        Zona Norte

                        <li>Supermercado Empório DB, avenida Max Teixeira, Cidade Nova, zona Norte</li>
                        <li>Supermercado Nova Era, avenida Torquato Tapajós, Santa Etelvina, zona Norte</li>
                        <li>Supermercado Veneza, avenida Torquato Tapajós, Lagoa Azul, zona Norte</li>
                        <li>Hiper DB, avenida Margarita, Nova Cidade, zona Norte</li>
                        <li>Hiper DB, avenida Francisco Queiroz, Colônia Santo Antônio, zona Norte</li> </br>

                        Zona Leste

                        <li>Supermercado Cezar, rua 7B, São José Operário, zona Leste</li>
                        <li>Supermercado Atack, avenida Cosme Ferreira, Coroado III, zona Leste</li>
                        <li>Supermercado DB, avenida Cosme Ferreira, Coroado, zona Leste</li>
                        <li>Supermercado Assaí, avenida Autaz Mirim, São José, zona Leste</li> </br>

                        Zona Oeste

                        <li>Supermercado Yroyak, avenida Coronel Teixeira Ponta Negra, zona Oeste</li>
                        <li>Supermercado Nova Era, avenida Brasil, Santo Antônio, zona Oeste</li>
                        <li>Supermercado Carrefour, avenida Pedro Teixeira, Ponta Negra, zona Oeste</li>
                        <li>Hiper DB, avenida Coronel Teixeira, Ponta Negra, zona Oeste</li>
                        <li> Empório DB, avenida Coronel Teixeira, Ponta Negra, zona Oeste</li> </br> 

                        Zona Centro-Oeste

                        <li>Supermercado DB, avenida Pedro Teixeira, Dom Pedro, zona Centro-Oeste</li>
                        <li>Supermercado DB, Campos Elíseos, Redenção, zona Centro-Oeste</li>
                        <li>PEV Amazônia Sustentável, rua Vicente de Paula, Redenção, zona Centro-Oeste.</li>
                        
                        </ul> </br>

                        <h6>Fonte: Secretaria Municipal de Limpeza Urbana (Semulsp)</h6>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="about_img">
                     <figure><img class="img_responsive" src="images/coleta-seletiva.jpg" alt="#"/></figure>
                     <h5>(Foto:  Valdo Leão / Semcom)</h5>

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
                           <li><a href="homepage.php #sobre">Sobre</a></li>
                           <li><a href="homepage.php #noticias">Notícias</a></li>
                           <li><a href="homepage.php #parceiros">Parceiros</a></li>
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
