<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

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
                            <li><a href="nossasRealizacoes.php" class="black-text">Nossas Realizações</a></li>
                            <li class="active"><a href="voce.php" class="black-text">+Você</a></li>
                            <li><a href="contato.php" class="black-text">Contato</a></li>
                        </ul>
                        
                        <ul id="nav-mobile" class="sidenav">
                            <li><a href="index.php" class="black-text">Início</a></li>
                            <li><a href="empresa.php" class="black-text">Empresa</a></li>
                            <li><a href="nossasRealizacoes.php" class="black-text">Nossas Realizações</a></li>
                            <li class="active"><a href="voce.php" class="black-text">+Você</a></li>
                            <li><a href="contato.php" class="black-text">Contato</a></li>
                        </ul>
                        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>

        
            
        <?php include("enviarEmail.php"); ?>
        <!-- CONTENT -->
        <div class="parallax-container valign-wrapper" style=" height: 300px;">
            <div class="parallax"><img src="imgs/bg1.jpg" alt="Unsplashed background img 3"></div>
            <p class="text-bg-voce container center">A energia que nos move até você é a sua satisfação!</p>
            <div id="portfolio" ></div>
        </div>

        <div class="">
            <div class="row container">
																				
                <h5>Que tal economizar até 95% na sua conta de energia?</h5>
                <p class="center">A <strong>JOULE</strong> te ajuda.</p>
                <p class="text-justify">Foi autorizado pela Agência Nacional de Energia Elétrica (ANEEL) 
                    através da resolução N° 482 de 17 de abril de 2012 e sua revisão 
                    com a Resolução N° 687 de 25 de novembro de 2015 que pessoa comum 
                    (física ou jurídica) produza sua própria energia e dessa forma barateie 
                    até 95% na sua fatura de energia. A Joule realiza todo processo desde 
                    o dimensionamento do projeto, submissão à concessionária de energia, 
                    Instalação e monitoramento da geração. Fornecemos garantia da instalação 
                    e dos equipamentos.</p>
                <br/>
                <p class="center">Interessou?</p>
                <p class="center">Realize seu orçamento sem custo algum.</p>
                <br/>
                <div class="row">
                    <div class="col s12 m4 l4 center">
                        <p>Envie agora suas informações</p>
                        <form action="voce.php" name="form_voce" method="post">
                        <input type="text" name="consumoMensal" id="consumoMensal" placeholder="Informe seu consumo mensal">
                        <input type="email" name="email" id="email" placeholder="Informe seu e-mail">
                        <input type="submit" name="enviar" class="waves-effect waves-light btn" value="Solicitar Orçamento">
                        </form>
                    </div>
                    <div class="col s12 m4 l4">
                        <p class="center"><strong>ou</strong></p>
                    </div>
                    <div class="col s12 m4 l4 center">
                        <p>
                            Torne-se mais próximo da Joule, baixe nosso app para comunicação direta.
                        </p>
                        <p>
                           <strong>App Papo Solar</strong> 
                        </p>
                                           <!-- Modal Trigger -->
                        <a class="modal-trigger" href="#modal1"><img src="imgs/img_play_store.png" class="img-play-store-voce"  alt="Link para playstore"></a>
                                            <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <h4>Em breve</h4>
                                <p>O app está sendo construído...</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- FOOTER -->

        <footer class="page-footer gray">
            <div class="container">
                <div class="col s12 center">
                    <h5 class="white-text">Joule Energias</h5>
                    <p class="white-text text-lighten-4">Energizando sua vida! <spam  style="color: rgba(255, 255, 255, 0.8);">©2018 Todos os Direitos Reservados</spam></p>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center">
                    Developed by <a class="link-footer" href="https://github.com/fabiiomariiano">FM</a> & <a class="link-footer" href="https://github.com/lolmanxd">MMR</a>
                </div>
            </div>
        </footer>
    

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
        <script>
            $(document).ready(function(){
                $('.modal').modal();
            });
        </script>
    </body>
</html>