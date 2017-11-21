  <!doctype html>
  <html lang="en">
  <head>
    <title>Kaizen</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo URL;?>public/user/assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- JQuery Ui -->
    <link rel="stylesheet" href="<?php echo URL;?>public/user/jquery-ui-1.12.1/jquery-ui.min.css">

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="<?php echo URL;?>public/user/assets/css/estilos.css">
    <link rel="stylesheet" href="<?php echo URL;?>public/user/assets/css/estiloMenu.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URL;?>public/user/bootstrap/dist/css/bootstrap.min.css">

    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?php echo URL;?>public/user/sweetalert/dist/sweetalert.css">
</head>

<body>
    <!-- menu -->
    <header>
    <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="#navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
                <img src="<?php echo URL;?>public/user/assets/images/Kaizen/LogoPerceptio2.png" alt="Logo">
            </a>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <div class="navbar-nav mr-auto ml-auto text-center">
                <a class="nav-item nav-link" href="<?php echo URL;?>principal">Inicio</a>
                <a class="nav-item nav-link" href="<?php echo URL;?>principal/propositos">Propositos</a>
                <a class="nav-item nav-link" href="<?php echo URL;?>principal/cincoS">5S</a>
                <a class="nav-item nav-link" href="<?php echo URL;?>principal/kanban">Kanban</a>
                <a class="nav-item nav-link" href="<?php echo URL;?>principal/hansei">Hansei</a>
                <a class="nav-item nav-link" href="<?php echo URL;?>principal/mudas">Mudas</a>
                <a class="nav-item nav-link" href="<?php echo URL;?>principal/pokayoke">Poka-Yoke</a>
                <a class="nav-item nav-link" href="<?php echo URL;?>principal/glosario">Glosario</a>
            </div>
            <div class="d-flex justify-content-center">
                <ul class="nav nav-pills">
                    <!-- usuario logueado -->
                    <li class="btn btn-block">
                        <div id="nombreLogueado" style="color: white;"></div>
                    </li>
                    <!-- boton abrir modal login -->
                    <li>
                        <a href="#modalLogin" data-toggle="modal" class="btn btn-block" data-target="#modalLogin" id="btnIniciarSesion" name="btnIniciarSesion">Iniciar sesion</a>
                    </li>
                    <!-- boton abrir modal registro -->
                    <li>
                        <a href="#modalRegistro" data-toggle="modal" class="btn btn-primary" data-target="#modalRegistro" id="btnRegistrarse" name="btnRegistrarse">Registrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
