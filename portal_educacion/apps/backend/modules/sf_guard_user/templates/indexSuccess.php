<?php use_helper('I18N', 'Date') ?>
<?php slot('title') ?>
    Listado de Usuarios
<?php end_slot() ?>  

<div id="sf_admin_container">
    <div id="sf_admin_header">
        <?php include_partial('sf_guard_user/list_header', array('pager' => $pager)) ?>
    </div>
    
    <h1 class="text-center padding20"><?php echo __('Usuarios', array(), 'messages') ?></h1>

    <?php include_partial('sf_guard_user/flashes') ?>

    <div id="sf_admin_bar">
        <?php include_partial('sf_guard_user/filters', array('form' => $filters, 'configuration' => $configuration, 'login_activo' => $login_activo)) ?>
    </div>

    <div id="sf_admin_content border">
        <form action="<?php echo url_for('sf_guard_user_collection', array('action' => 'batch')) ?>" method="post">
            <?php include_partial('sf_guard_user/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
        </form>
    </div>


    <div id="sf_admin_footer">
        <?php include_partial('sf_guard_user/list_footer', array('pager' => $pager)) ?>
    </div>
</div>
