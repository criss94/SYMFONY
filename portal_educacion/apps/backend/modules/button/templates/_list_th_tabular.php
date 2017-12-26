<?php slot('sf_admin.current_header') ?>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="text-center">
  <?php if ('btn_nombre' == $sort[0]): ?>
    <?php echo link_to(__('Nombre', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_nombre&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_nombre&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="text-center">
  <?php if ('btn_link' == $sort[0]): ?>
    <?php echo link_to(__('URL', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('URL', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_link&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="text-center">
  <?php if ('btn_imagen' == $sort[0]): ?>
    <?php echo link_to(__('Icono', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_imagen&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Icono', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_imagen&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="text-center">
  <?php if ('btn_activo' == $sort[0]): ?>
    <?php echo link_to(__('Activo', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_activo&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Activo', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_activo&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="text-center">
  <?php if ('btn_cat_id' == $sort[0]): ?>
    <?php echo link_to(__('Categoria', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_cat_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Categoria', array(), 'messages'), '@botones', array('query_string' => 'sort=btn_cat_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>