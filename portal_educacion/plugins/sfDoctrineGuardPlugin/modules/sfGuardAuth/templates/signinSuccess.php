<?php use_helper('I18N') ?>

<div id="login">
    <header class="navbar navbar-primary navbar-top header-nav">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
                <a class="navbar-brand bac-header" href="index.html"></a>
              </div>
              <div class="col-md-6 col-sm-6 text-right oculto">
                <h5 class="sub-brand"><img src="images/bac-header-2.png"></h5>
              </div>
          </div>
        </div>
    </header>
    <div class="jumbotron jumbotron-home jumbotron-misc jumbotron-main container_login">
        <div class="jumbotron-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Portal Educación</h1>
                        <p class="lead">Todas tus aplicaciones y servicios en un solo lugar</p>
                    </div>
                </div>
                <div class="row margintop20">
                    <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-body padding30">
                                <h3 class="margintop0 marginbottom20"><?php echo __('Ingresar', null, 'sf_guard') ?></h3>
                                <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <a class="navbar-brand bac-footer" href="http://www.buenosaires.gob.ar" target="_blank">Buenos Aires Ciudad</a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="sub-brand">
                            <p>Portal Educación<br>
                            <span class="text-muted">Ministerio de Educación</span></p>
                        </div>
                  </div>
              </div>
          </div>
      </div>
    </footer>
</div>