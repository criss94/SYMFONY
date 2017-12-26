<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Edición de <?php echo $noticias->getNotNombre() ?>
<?php end_slot() ?>

<div id="sf_admin_container">
  <div id="sf_admin_header">
    <?php include_partial('news/form_header', array('noticias' => $noticias, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
  <div class="container paddingtop30 paddingbottom30"> 
    <h1 class="text-center"><?php echo __('Edicion de %%not_nombre%%', array('%%not_nombre%%' => $noticias->getNotNombre()), 'messages') ?></h1>

    <?php include_partial('news/flashes') ?>

    <div class="row">
      <?php include_partial('news/form', array('noticias' => $noticias, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
    </div>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('news/form_footer', array('noticias' => $noticias, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
