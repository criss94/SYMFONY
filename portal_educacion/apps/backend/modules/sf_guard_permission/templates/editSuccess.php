<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Edición de <?php echo $sf_guard_permission->getName() ?>
<?php end_slot() ?>
<div id="sf_admin_container">
    <div id="sf_admin_header">
        <?php include_partial('sf_guard_permission/form_header', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration)) ?>
    </div>
    <div class="container paddingtop30 paddingbottom30"> 
        <h1 class="text-center paddingbottom30"><?php echo __('Edicion de %%name%%', array('%%name%%' => $sf_guard_permission->getName()), 'messages') ?></h1>

        <?php include_partial('sf_guard_permission/flashes') ?>

        <div class="row">
          <?php include_partial('sf_guard_permission/form', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
        </div>
    </div>

  <div id="sf_admin_footer">
    <?php include_partial('sf_guard_permission/form_footer', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
