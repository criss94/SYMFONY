<header class="navbar navbar-primary navbar-top">
    <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
              <a class="navbar-brand bac-header" href="<?php echo url_for('/') ?>"></a>
            </div>
            <div class="col-md-6 col-sm-6 text-right oculto">
              <h5 class="sub-brand"><img src="/images/bac-header-2.png"></h5>
            </div>
        </div>
    </div>
</header>
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
            <a class="navbar-brand" href="<?php echo url_for('/') ?>" title="Gobierno Electrónico">Portal de Educación</a>
          </div>
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?php echo url_for('@botones') ?>">Mis Aplicaciones</a></li>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo $sf_user->getGuardUser()->getFirstName().' '.$sf_user->getGuardUser()->getLastName(); ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if($sf_user->hasCredential('admin')): ?>
                            <li><a href="<?php echo url_for('@botones') ?>">Admin Botones</a></li>
                            <li><a href="<?php echo url_for('@categorias') ?>">Admin Categorias</a></li>
                            <li><a href="<?php echo url_for('@sf_guard_user') ?>">Admin Usuarios</a></li>
                            <li><a href="<?php echo url_for('@sf_guard_group') ?>">Admin Grupos</a></li>
                            <li><a href="<?php echo url_for('@sf_guard_permission') ?>">Admin Permisos</a></li>
                            <li><a href="<?php echo url_for('@noticias') ?>">Admin Noticias</a></li>
                            <li><a href="<?php echo url_for('@servicios') ?>">Admin Servicios</a></li>
                            <li class="divider" role="separator"></li>
                            <?php endif; ?>
                            <li><a href="/logout">Cerrar sesion</a></li>
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
                    <li><a href="<?php echo url_for('@botones') ?>">Inicio</a></li>
                    <li>Botones</li>
                    <?php if($sf_params->get('id')): ?>
                    <li>Editar</li>
                    <li class="active"><?php echo $botones->getBtnNombre() ?></li>
                    <?php else: ?>
                    <li class="active">Nuevo</li>
                    <?php endif; ?>
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