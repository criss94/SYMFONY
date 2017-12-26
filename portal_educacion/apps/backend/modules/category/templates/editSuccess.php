<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Edición de <?php echo $categorias->getCatNombre() ?>
<?php end_slot() ?>

<div id="sf_admin_container">
  <div id="sf_admin_header">
    <?php include_partial('category/form_header', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
    
  <div class="container paddingtop30 paddingbottom30"> 
    <h1 class="text-center"><?php echo __('Edicion de %%cat_nombre%%', array('%%cat_nombre%%' => $categorias->getCatNombre()), 'messages') ?></h1>

    <?php include_partial('category/flashes') ?>

    <div class="row">
      <?php include_partial('category/form', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
    </div>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('category/form_footer', array('categorias' => $categorias, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>