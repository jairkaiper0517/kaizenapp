<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Administrador</title>
  <meta name="description" content="...">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Icons -->
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/font-awesome-4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/css/fontello.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/css/chartist.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/css/app.min.css">

  <!-- Modernizr -->
  <script src="<?php echo URL;?>public/admin/assets/js/modernizr-2.8.3.min.js"></script>

  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
  <!-- Header -->
  <header id="header">
    <h1 class="logo">
      <a href="#" title="#" class="js-nav-toggler">
        <i class="icon icon-close"></i>
      </a>
      <a href="www.perceptio.net">
        <img id="imgPerceptio" src="<?php echo URL;?>public/admin/img/logoPerceptio2.png" alt="Perceptio">
      </a>
    </h1>

    <div class="pageContent">
      <div class="container">
        <ul class="topNavigation">

          <li>
            <div class="btn-group simpleList list-sm">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="zmdi zmdi-account-box zmdi-hc-fw icon"></i>
              </button>

              <!-- Opciones del usuario logueado -->
              <ul class="dropdown-menu pull-right">
                  <li>
                    <!-- Link perfil -->
                    <a href="<?php echo URL;?>administrador/perfil"  title="#"><i class="zmdi fa fa-user zmdi-hc-fw icon"></i>  Mi perfil</a>
                  </li>
                  <li>
                    <!-- Link editar perfil -->
                    <a href="<?php echo URL;?>administrador/editar_perfil" title="#"><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i>  Editar perfil</a>
                  </li>
                    <!-- Link Cerrar sesion-->
                    <!-- Borrar la sesion activa "token" e ir a la principal -->
                  <li><a href="<?php echo URL;?>principal/index" title="#"><i class="fa fa-sign-out zmdi-hc-fw icon" aria-hidden="true"></i>  Cerrar Sesion</a></li>
              </ul>
            </div>
          </li>


        </ul>
      </div>
    </div>
  </header>

  <aside class="aside">

    <!-- User profile -->
		<div class="asideUserProfile">
			<a href="#" title="#" class="c">
				<img src="<?php echo URL;?>public/admin/img/userAvatar.png" alt="#" class="img-responsive">
				<span class="name hidden-xs hidden-sm"><!-- Nombre --><br /><!-- Nombre --></span>
			</a>
		</div>

<div style="padding: 10px; margin-bottom: 10px;">

    <!-- Navigation -->
    <nav class="simpleList asideNavigation">

      <ul>

        <li class="sub js-submenu">
					<div><i class="zmdi zmdi-collection-text zmdi-hc-fw icon"></i><span class="hidden-xs hidden-sm">Publicaciones<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
            <li><a href="<?php echo URL;?>administrador/crear_Publicacion" title="#">Crear nueva</a></li>
            <li><a href="<?php echo URL;?>administrador/publicaciones" title="#">Ver publicaciones</a></li>
          </ul>
				</li>


        <li id="btnUsuarios" onclick="ubicacion()">
          <a href="<?php echo URL;?>administrador/usuarios_registrados" title="#"><i class="zmdi zmdi-accounts zmdi-hc-fw icon"></i></i> <span class="hidden-xs hidden-sm">Usuarios</span></a>
        </li>

      </ul>
    </nav>
  </aside>
