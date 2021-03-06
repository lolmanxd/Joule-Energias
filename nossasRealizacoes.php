<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="pgw_carousel/pgwslideshow.css" rel="stylesheet" />

        <title>Joule Energias</title>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="icon" href="imgs/Joule_logo_png.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="imgs/Joule_logo_png.ico" type="image/x-icon" />
    </head>

    <body class="fundo">
        <!-- NAVBAR -->
        <div class="navbar-fixed">
            <nav class="color-joule" role="navigation">
                <div class="nav-wrapper container">
                    <a href="index.php"><img class="logo-joule brand-logo" src="imgs/Joule_logo.png" alt="Joule Energias logo"></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php" class="black-text">Início</a></li>
                        <li><a href="empresa.php" class="black-text">Empresa</a></li>
                        <li class="active" ><a href="nossasRealizacoes.php" class="black-text">Nossas Realizações</a></li>
                        <li><a href="voce.php" class="black-text">+Você</a></li>
                        <li><a href="contato.php" class="black-text">Contato</a></li>
                    </ul>
                    
                    <ul id="nav-mobile" class="sidenav">
                        <li><a href="index.php" class="black-text">Início</a></li>
                        <li><a href="empresa.php" class="black-text">Empresa</a></li>
                        <li class="active"><a href="nossasRealizacoes.php" class="black-text">Nossas Realizações</a></li>
                        <li><a href="voce.php" class="black-text">+Você</a></li>
                        <li><a href="contato.php" class="black-text">Contato</a></li>
                    </ul>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><img style="padding-top:40%" src="imgs/menu.png" alt="icone menu"></a>
                </div>
            </nav>
        </div>

        <?php  
        include('salveArvore.php'); 
        
        $salvou = arvoresSalvas();
        
        ?>

        <!-- CONTENT -->
        <div class="parallax-container valign-wrapper" style=" height: 300px;">
                <div class="parallax"><img src="imgs/bg1.jpg" alt="Unsplashed background img 3"></div>
                <div id="portfolio" ></div>
            </div>
        
        <div class="container center">
            <h4>Já poupamos <strong><?php echo ("$salvou"); ?></strong> árvores para você!</h4>
            <br>
            <h5>Projetos realizados</h5>        
        </div>
        
            <!-- CARD DESKTOP-->
        <div class="row s12 container hide-on-med-and-down">
            <div class="s12 z-depth-2 my-card desktop white-card">
                <div class="col l4 white-card">
                    <p><strong>Tipo:</strong> Solar</p>
                    <p><strong>Cliente:</strong> Joel Ferreira de Lima</p>
                    <p><strong>Geração Mensal:</strong> 650kWh/mês</p>
                    <p><strong>Descrição:</strong> 
                        <p class="scroll"> 
                                Sistema realizado na rua Itaimbé, n° 262, Ipsep, Recife-PE. 
                                Composto por 14 módulos Solar Fotovoltaico de potência 320 Wp 
                                e Inversor de 5 kW do fabricante B&B. Sistema monitorado via internet.
                        </p>
                    </p>
                </div>
                <div class="white-card">
                    <ul class="pgwSlideshow">
                        <li><img src="imgs/projeto_01_01.jpeg"  alt="Projeto no Ipsep" ></li>
                        <li><img src="imgs/projeto_01_02.jpeg" alt="Projeto no Ipsep" ></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- CARD TABLET-->
        <div class="row s12 container hide-on-large-only hide-on-small-only">
            <div class="s12 z-depth-2 my-card tablet white-card">
                <div class="col s12 m4 l4 white-card">
                    <p><strong>Tipo:</strong> Solar</p>
                    <p><strong>Cliente:</strong> Joel Ferreira de Lima</p>
                    <p><strong>Geração mensal:</strong> 650kWh/mês</p>
                    <p><strong>Descrição:</strong> 
                        <p class="scroll"> 
                                Sistema realizado na rua Itaimbé, n° 262, Ipsep, Recife-PE. 
                                Composto por 14 módulos Solar Fotovoltaico de potência 320 Wp 
                                e Inversor de 5 kW do fabricante B&B. Sistema monitorado via internet.
                        </p>
                    </p>
                </div>
                <div class="white-card">
                    <ul class="pgwSlideshow">
                        <li><img src="imgs/projeto_01_01.jpeg"  alt="Projeto no Ipsep"></li>
                        <li><img src="imgs/projeto_01_02.jpeg" alt="Projeto no Ipsep"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- CARD MOBILE-->
        <div class="row s12 container hide-on-med-and-up">
            <div class="s12 z-depth-2 my-card mobile white-card">
                <div class="col s12 white-card">
                    <p><strong>Tipo:</strong> Solar</p>
                    <p><strong>Cliente:</strong> Joel Ferreira de Lima</p>
                    <p><strong>Geração mensal:</strong> 650kWh/mês</p>
                    <p><strong>Descrição:</strong> 
                        <p class="scroll-mobile"> 
                                Sistema realizado na rua Itaimbé, n° 262, Ipsep, Recife-PE. 
                                Composto por 14 módulos Solar Fotovoltaico de potência 320 Wp 
                                e Inversor de 5 kW do fabricante B&B. Sistema monitorado via internet.
                        </p>
                    </p>
                </div>
                <div class="col s12 white-card">
                    <ul class="pgwSlideshow">
                        <li><img src="imgs/projeto_01_01.jpeg"  alt="Projeto no Ipsep"></li>
                        <li><img src="imgs/projeto_01_02.jpeg" alt="Projeto no Ipsep"></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- FOOTER DESKTOP-->
        <footer class="footer-desktop gray hide-on-small-only">
            <div class="container">
                <div class="col s12 center">
                    <h5 class="white-text" style="font-weight: 500">Joule Energias - <span class="white-text text-lighten-4" style="font-size: 20px; font-weight: 400">Energizando sua vida!</span></h5>
                    <p style="color: rgba(255, 255, 255, 0.8);">©2018 Todos os Direitos Reservados</p>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center">
                        Developed by <a class="link-footer" href="https://github.com/fabiiomariiano">FM</a> & <a class="link-footer" href="https://github.com/lolmanxd">MMR</a>
                </div>
            </div>
        </footer>

        <!-- FOOTER MOBILE-->
        <footer class="footer-mobile gray hide-on-med-and-up">
            <div class="container">
                <div class="col s12 center">
                    <h5 class="white-text" style="font-weight: 500">Joule Energias - <span class="white-text text-lighten-4" style="font-size: 20px; font-weight: 400">Energizando sua vida!</span></h5>
                    <p style="color: rgba(255, 255, 255, 0.8);">©2018 Todos os Direitos Reservados</p>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center">
                        Developed by <a class="link-footer" href="https://github.com/fabiiomariiano">FM</a> & <a class="link-footer" href="https://github.com/lolmanxd">MMR</a>
                </div>
            </div>
        </footer>

        <!--  Scripts-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
        <script src="pgw_carousel/pgwslideshow.min.js"></script>
        <script type="text/javascript">
               $(document).ready(function() {
               $('.pgwSlideshow').pgwSlideshow({
                transitionEffect:'fading'
               });
          });        
        </script>
    </body>
</html>