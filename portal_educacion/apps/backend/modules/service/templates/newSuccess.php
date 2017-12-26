<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Alta de un nuevo servicio
<?php end_slot() ?>

<div id="sf_admin_container">
  <div id="sf_admin_header">
    <?php include_partial('service/form_header', array('servicios' => $servicios, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div class="container paddingtop30 paddingbottom30">
    <h1 class="text-center paddingbottom30"><?php echo __('Alta de un nuevo servicio', array(), 'messages') ?></h1>

    <?php include_partial('service/flashes') ?>

    <div class="row">
      
      <div class="col-xs-12 col-sm-6 col-md-4 col-center marginbottom20">
        <div class="alert alert-info">
          <div class="panel-body text-center">
            <strong>AVISO</strong>
            <p class="font11 gray clearmargin">Ingresa tu clase CSS (solo la clase) para crear tu icono, de donde? hace click <a href="http://fontawesome.io/icons/" target="_blank"> aquí</a> buscalo, copialo y pegalo!</p>
            <span class="font11 gray clearmargin">Ejemplo: </span><span class="font11">fa fa-user</span>
          </div>
        </div>
      </div>

      <?php include_partial('service/form', array('servicios' => $servicios, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>

    </div>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('service/form_footer', array('servicios' => $servicios, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
