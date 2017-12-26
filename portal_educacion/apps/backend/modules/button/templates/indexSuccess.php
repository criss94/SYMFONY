<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Listado de Botones
<?php end_slot() ?>

<div id="sf_admin_container">
    <div id="sf_admin_header">
        <?php include_partial('button/list_header', array('pager' => $pager)) ?>
    </div>

    <h1 class="text-center padding20"><?php echo __('Botones', array(), 'messages') ?></h1>

    <?php include_partial('button/flashes') ?>

    <div id="sf_admin_bar">
        <?php include_partial('button/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </div>

    <div id="sf_admin_content">
        <form  action="<?php echo url_for('botones_collection', array('action' => 'batch')) ?>" method="post">
            <?php include_partial('button/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
        </form>
    </div>

    <div id="sf_admin_footer">
        <?php include_partial('button/list_footer', array('pager' => $pager)) ?>
    </div>
</div>
