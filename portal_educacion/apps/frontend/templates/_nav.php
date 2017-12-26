<div class="jumbotron jumbotron-small jumbotron-misc jumbotron-main jumbotron-home">
    <div class="jumbotron-overlay">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
          <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Cambiar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo url_for('@homepage') ?>" title="Gobierno Electrónico">Portal de Educación</a>
          </div>
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?php echo url_for('@homepage') ?>">Mis Aplicaciones</a></li>
                <?php //if ($sf_user->hasCredential('ver_menu_integrar')): ?>
                <!--<li><a href="base_formularios.html">Integrar</a></li>-->
                <?php //endif ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <!--<a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php //echo $sf_user->getAttribute('full_name'); ?> <span class="caret"></span></a>-->
                        <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo $sf_user->getGuardUser()->getFirstName().' '.$sf_user->getGuardUser()->getLastName(); ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php //if ($sf_user->hasCredential('ver_menu_de_administracion')): ?>
                            <!-- links disponibles solo para el admin --> 
                            <li><a href="backend_dev.php/button">Admin Botones</a></li>
                            <li><a href="backend_dev.php/category">Admin Categorias</a></li>
                            <li><a href="backend_dev.php/sf_guard_user">Admin Usuarios</a></li>
                            <li><a href="backend_dev.php/sf_guard_group">Admin Grupos</a></li>
                            <li><a href="backend_dev.php/sf_guard_permission">Admin Permisos</a></li>
                            <li><a href="backend_dev.php/news">Admin Noticias</a></li>
                            <li><a href="backend_dev.php/service">Admin Servicios</a></li>
                            <li class="divider" role="separator"></li>
                            <?php //endif; ?>
                            <li><a href="logout">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ol class="breadcrumb white">
                    <li><a href="<?php echo url_for('@homepage') ?>">Inicio</a></li>
                    <li class="active">Portal Educación</li>
                </ol>
            </div>
            <div class="col-xs-12">
                <div class="margintop20 marginbottom60">
                    <h1>Portal Educación</h1>
                    <p class="lead">Todas tus aplicaciones y servicios en un solo lugar</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>