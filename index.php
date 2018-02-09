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

    <body >
            <!-- NAVBAR -->
            <div class="navbar-fixed">
                <nav class="color-joule" role="navigation">
                    <div class="nav-wrapper container">
                        <a href="index.php"><img class="logo-joule brand-logo" src="imgs/Joule_logo.png" alt="Joule Energias logo"></a>
                        <ul class="right hide-on-med-and-down">
                            <li class="active" ><a href="index.php" class="black-text">Início</a></li>
                            <li><a href="empresa.php" class="black-text">Empresa</a></li>
                            <li><a href="nossasRealizacoes.php" class="black-text">Nossas Realizações</a></li>
                            <li><a href="voce.php" class="black-text">+Você</a></li>
                            <li><a href="contato.php" class="black-text">Contato</a></li>
                        </ul>
                        
                        <ul id="nav-mobile" class="sidenav">
                            <li class="active" ><a href="index.php" class="black-text">Início</a></li>
                            <li><a href="empresa.php" class="black-text">Empresa</a></li>
                            <li><a href="nossasRealizacoes.php" class="black-text">Nossas Realizações</a></li>
                            <li><a href="voce.php" class="black-text">+Você</a></li>
                            <li><a href="contato.php" class="black-text">Contato</a></li>
                        </ul>
                        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>
        <?php  
        include('salveArvore.php'); 
        
        $salvou = arvoresSalvas();
        
        ?>
        <!-- CONTENT -->
        <!-- desktop -->
        <div style="height:2em"></div>
        <div class="center hide-on-med-and-down" style="width: 100%; height:45em; ">
            <img src="imgs/bg-home.jpeg" style="width: 100%; height: 45em; margin-top: 2%" alt="Image home">
            <label style="color: #0a3819; position: absolute; top: 85%; left: 28%; font-size: 40px;">Já poupamos <strong><?php echo ("$salvou"); ?></strong> árvores para você!</label>
        </div>

        <!-- tablet -->
        <div class="center hide-on-large-only hide-on-small-only" style="width: 100%; height:45em;">
            <img src="imgs/bg-home.jpeg" style="width: 100%; height: 45.5em; margin-top: 2%" alt="Image home">
            <label style="color: #0a3819; position: absolute; top: 80%; left: 20%; font-size: 35px;">Já poupamos <strong><?php echo ("$salvou"); ?></strong> árvores para você!</label>
        </div>

        <!-- mobile -->
        <div class="center hide-on-med-and-up" style="width: 100%; height:44.8em; margin-top:2.5%">
            <img src="imgs/bg-home.jpeg" style="width: 100%; height: 45em; margin-top: 5%" alt="Image home">
            <label style="color: #0a3819; position: absolute; top: 77%; left: 0%; font-size: 25px;">Já poupamos <strong><?php echo ("$salvou"); ?></strong> árvores para você!</label>
        </div>
        
        <br>
        <!-- FOOTER -->

        <footer class="page-footer gray">
            <div class="container">
                <div class="row">
                <div class="col s12 center">
                    <h5 class="white-text">Joule Energias</h5>
                    <p class="grey-text text-lighten-4">Energizando sua vida!</p>
                    <p>© 2018 Copyright Text</p>
                </div>
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

    </body>
</html>