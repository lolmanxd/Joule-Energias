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
                            <li><a href="voce.php" class="black-text">+Você</a></li>
                            <li class="active"><a href="contato.php" class="black-text">Contato</a></li>
                        </ul>
                        
                        <ul id="nav-mobile" class="sidenav">
                            <li><a href="index.php" class="black-text">Início</a></li>
                            <li><a href="empresa.php" class="black-text">Empresa</a></li>
                            <li><a href="nossasRealizacoes.php" class="black-text">Nossas Realizações</a></li>
                            <li><a href="voce.php" class="black-text">+Você</a></li>
                            <li class="active"><a href="contato.php" class="black-text">Contato</a></li>
                        </ul>
                        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>

        <!-- CONTENT -->
        <div class="parallax-container valign-wrapper" style=" height: 300px;">
            <div class="parallax"><img src="imgs/bg1.jpg" alt="Unsplashed background img 3"></div>
            <div id="portfolio" ></div>
        </div>
        <div>
            <div class="row container">
                <h5 class="center">Contate-nos</h5>
                <br/>
                <p class="nossos-dados"><strong>Nossos dados</strong></p>
                <p><strong>Telefones: </strong> (81) 99521-2354 | (83) 98613-1263 | (83) 98716-2070</p>
                <p><strong>E-mail: </strong>joule@joule.eco.br</p>
                <p><strong>Horário de Funcionamento: </strong>Segunda a sexta-feira, 07hs - 17hs</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.940258234763!2d-34.92137368521984!3d-8.107565894163267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1ef7c0e30963%3A0xb4ac2b7ce47ad72d!2sRua+Itaimb%C3%A9%2C+262+-+Ipsep%2C+Recife+-+PE%2C+51350-030!5e0!3m2!1spt-BR!2sbr!4v1518131731246" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br/>
                <br/>
                <div class="center">
                    <p>
                        Torne-se mais próximo da Joule, baixe nosso app para comunicação direta.
                    </p>
                    <p>
                        <strong>App Papo Solar</strong> 
                    </p>
                                        <!-- Modal Trigger -->
                    <a class="modal-trigger hide-on-small-only" href="#modal1"><img src="imgs/img_play_store.png" class="img-play-store-contato"  alt="Link para playstore"></a>
                    <a class="modal-trigger hide-on-med-only  hide-on-large-only" href="#modal1"><img src="imgs/img_play_store.png" class="img-play-store-voce"  alt="Link para playstore"></a>
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