<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>FATEC BARUERI</title>
    <link rel="icon" href="images/estudo.ico">
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/fatec.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-search"></i>Alunos</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                                <li>
                                    <a href="eventos.php">Sua respostas</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Metricas</a>
                        </li>

                        <li>
                            <a href="contato.php">
                                <i class="zmdi zmdi-email-open"></i>Contato</a>
                        </li>
                        <li>
                            <a href="map.php">
                                <i class="fas fa-form"></i>Formulario</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">

                                <a class="js-arrow" href="conteudo.php">
                                <i class="fa fa-book"></i>Conteúdos</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                                </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/barueri1.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>

                        <li class="active has-sub">

                                <a class="js-arrow" href="#">
                                    <i class="fas fa-search"></i> Egresso</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">

                                <li>
                                    <a href="eventos.php">Suas respostas</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Metricas</a>
                        </li>

                        <li>
                            <a href="contato.php">
                                <i class="zmdi zmdi-email-open"></i>Contato</a>
                        </li>
                        <li>
                            <a href="map.php">
                                <i class="fas fa-file"></i>Formulario</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="conteudo.php">
                                <i class="fa fa-book"></i>Conteúdos</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                            </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-close"></i>Sair</a>
                        </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">

                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    <div class="noti__item js-item-menu">
                                        <button class="btn btn-primary  btn-sm">Primeiro Acesso</button>
                                        <span class="quantity">*</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p><strong>Primeiros passos no Sistema Egresso </strong></p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/alu.ico" alt="Aluno" />
                                                </div>
                                                <div class="content">
                                                    <p class="text bg-light text-dark">Você Egresso agora tem acesso o Sistema dos Ex-alunos</p>
                                                    <span><i class="fa fa-laptop"> </i> </i> <i class="fa fa-thumbs-up"></i> </span>  
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/alun.ico" alt="Egresso" />
                                                </div>
                                                <div class="content">
                                                    <p class="text bg-light text-dark">Com o seu acesso a nossa plataforma: 
                                                        <ul>
                                                            <li> Metricas em relação aos formados </li>
                                                            <li> Convites para palestras ou eventos </li>
                                                            <li> Possíveis oportunidades de empregos </li>
                                                            <li> Acesso a conteúdos exclusivos </li>
                                                        
                                                    
                                                   
                                                       
                                                        
                                                    </ul>
                                                    <span></span>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/estudo.ico" alt="Egresso" />
                                                </div>
                                                <div class="content">
                                                    <p class="text bg-light text-dark">Seu Feedback é muito importante para a FATEC</p>
                                                    <span><a href="map.php">Acesse esse link e nos ajude a melhorar cada vez mais.</a></span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">A FATEC agradece</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/alun.ico" alt="FATEC BARUERI" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">FATEC BARUERI</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/alun.ico" alt="FATEC BARUERI" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                            <a href="#">FATEC BARUERI</a>
                                                        </h5>
                                                    <?php
                                                        require_once("banco/verificar-usuario.php"); ?>
                                                        <span class="email"><?= usuarioLogado()  ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <?php echo date('d-m-Y'); ?>
                                <br>
                                <?php echo date('H:i:s'); ?>

                        </div>
                    </div>
                </div>

            </header>

            <!-- HEADER DESKTOP-->