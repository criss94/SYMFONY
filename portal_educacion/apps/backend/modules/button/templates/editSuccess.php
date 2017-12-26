<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Edición de <?php echo $botones->getBtnNombre() ?>
<?php end_slot() ?>

<div id="sf_admin_container">
    <div id="sf_admin_header">
        <?php include_partial('button/form_header', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration)) ?>
    </div>
  
    <div class="container paddingtop30 paddingbottom30"> 
        <h1 class="text-center paddingbottom30"><?php echo __('Edicion de %%btn_nombre%%', array('%%btn_nombre%%' => $botones->getBtnNombre()), 'messages') ?></h1>

        <?php include_partial('button/flashes') ?>

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 col-center marginbottom20">
                <div class="alert alert-info">
                  <div class="panel-body text-center">
                    <strong>AVISO PARA EL CAMPO ICONO - FONDO DE COLOR</strong>
                    <p class="font11 gray clearmargin">Ingresa tu clase CSS (solo la clase) para crear tu icono, puedes encontrarlo en 
                     <a href="https://getbootstrap.com/docs/3.3/components/" target="_blank"> Glyphicons de Bootstrap</a> buscalo, copialo y pegalo!</p><br>
                    <span class="font11 gray clearmargin">Ejemplo: </span><span class="font11">glyphicon glyphicon-plus</span></div>
                    <p class="font11 text-center"><strong>IMPORTANTE!</strong> Tu fondo de color debe ser en codigo Hexadecimal, Ejemplo: <span class="font11 text-bold">#fdd306</span></p>
                    <p class="font11 gray text-center">Puedes encontrar el codigo Hexa. de distintos colores en <a href="http://gcba.github.io/BAstrap/#paleta_cromatica" target="_blank">paleta cromatica</a> o <a href="http://htmlcolorcodes.com/es/" target="_blank">codigo de colores</a> copia el codigo de 6 digitos, muy importante que tenga el # por delante!</p>
                  </div>
                </div>
            </div>

            <?php include_partial('button/form', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
        </div>
    </div>

    <div id="sf_admin_footer">
        <?php include_partial('button/form_footer', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration)) ?>
    </div>
</div>
