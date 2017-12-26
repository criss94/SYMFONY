<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="text-center">
  <?php if ('not_nombre' == $sort[0]): ?>
    <?php echo link_to(__('Nombre', array(), 'messages'), '@noticias', array('query_string' => 'sort=not_nombre&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre', array(), 'messages'), '@noticias', array('query_string' => 'sort=not_nombre&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="text-center">
  <?php if ('not_imagen' == $sort[0]): ?>
    <?php echo link_to(__('Imagen', array(), 'messages'), '@noticias', array('query_string' => 'sort=not_imagen&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Imagen', array(), 'messages'), '@noticias', array('query_string' => 'sort=not_imagen&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="text-center">
  <?php if ('not_activo' == $sort[0]): ?>
    <?php echo link_to(__('Activo', array(), 'messages'), '@noticias', array('query_string' => 'sort=not_activo&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Activo', array(), 'messages'), '@noticias', array('query_string' => 'sort=not_activo&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>