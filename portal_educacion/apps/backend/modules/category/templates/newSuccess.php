<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Alta de una nueva Categoria
<?php end_slot() ?>

<div id="sf_admin_container">
  <div id="sf_admin_header">
    <?php include_partial('category/form_header', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
    
  <div class="container paddingtop30 paddingbottom30">
    <h1 class="text-center paddingbottom30"><?php echo __('Alta de una nueva Categoria', array(), 'messages') ?></h1>

    <?php include_partial('category/flashes') ?>

    <div class="row">
      <?php include_partial('category/form', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
    </div>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('category/form_footer', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>