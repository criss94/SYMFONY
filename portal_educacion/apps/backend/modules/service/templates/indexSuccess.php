<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Listado de Servicios
<?php end_slot() ?>  

<div id="sf_admin_container">
  <div id="sf_admin_header">
    <?php include_partial('service/list_header', array('pager' => $pager)) ?>
  </div>
  
  <h1 class="text-center padding20"><?php echo __('Servicios', array(), 'messages') ?></h1>

  <?php include_partial('service/flashes') ?>

  <div class="container">
    <div id="sf_admin_bar">
      <?php include_partial('service/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </div>

    <div id="sf_admin_content">
      <form action="<?php echo url_for('servicios_collection', array('action' => 'batch')) ?>" method="post">
        <?php include_partial('service/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
      </form>
    </div>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('service/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
