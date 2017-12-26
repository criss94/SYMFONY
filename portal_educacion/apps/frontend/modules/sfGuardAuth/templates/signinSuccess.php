<?php use_helper('I18N') ?>
<?php
  //instanciamos las clases de google y nuestra clase para crear el link de login con la api
  include("/lib/google-login-api/autoload.php");
  include("/lib/google_auth.class.php");
  $client = new Google_Client();
  $auth = new GoogleAuth($client);
?>

<div id="login">
    <header class="navbar navbar-primary navbar-top header-nav">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
                <a class="navbar-brand bac-header" href="<?php echo url_for('@homepage') ?>"></a>
              </div>
              <div class="col-md-6 col-sm-6 text-right oculto">
                <h5 class="sub-brand"><img src="/images/bac-header-2.png"></h5>
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
                                <!-- si es true mostramos el login con google sino el login basico -->
                                <?php if($hideFormLogin->getActivo()): ?>
                                    <!-- autenticacion con google -->

                                    <?php if ($sf_user->hasFlash('error')): ?>
                                      <!-- error del login con google si el email no existe en nuestros resgistros -->
                                      <div class="error alert alert-danger text-center text-danger text-size-13">
                                        <?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?>
                                      </div>
                                    <?php endif; ?>

                                    <a class="box-login-google" href="<?php echo $auth->getAuthUrl() ?>">
                                        <img alt="Inicia sesión con google" class="img-login-google" src="/images/google.png"> Iniciar sesión con google
                                    </a>
                                <?php else: ?>
                                    <!-- login basico de symfony -->
                                    <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
                                <?php endif; ?>
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