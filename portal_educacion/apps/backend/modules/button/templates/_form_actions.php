<ul class="btn-group-md btn-group-vertical col-xs-12 col-sm-12 col-md-12 margintop10">
<?php if ($form->isNew()): ?>
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  <?php //echo $helper->linkToList(array(  'label' => 'Volver al listado',  'params' =>   array(  ),  'class_suffix' => 'list',)) ?>
  <a class="btn btn-primary" href="<?php echo url_for('@botones') ?>">Volver</a>
  <?php //echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
  <input class="btn btn-primary" type="submit" value="Guardar">
  <?php //echo $helper->linkToSaveAndAdd($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_add',  'label' => 'Save and add',)) ?>
  <input class="btn btn-primary" type="submit" name="_save_and_add" value="Guardar y agregar otro">
<?php else: ?>
  <!--<a onclick="if (confirm('¿Está seguro?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', 'e2fea5fe1142c34d572c39fbb3cf3547'); f.appendChild(m);f.submit(); };return false;" href="/backend_dev.php/button/14">Borrar</a>-->
  <?php //echo $helper->linkToList(array(  'label' => 'Volver al listado',  'params' =>   array(  ),  'class_suffix' => 'list',)) ?>
  <?php //echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
  <a class="btn btn-primary" href="<?php echo url_for('@botones') ?>">Volver</a>
  <input class="btn btn-primary" type="submit" value="Editar">
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete')) ?>
  <?php //echo $helper->linkToSaveAndAdd($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_add',  'label' => 'Save and add',)) ?>
<?php endif; ?>
</ul>
<!--<a class="btn btn-primary" href="<?php //echo url_for('@botones_delete?id='.$form->getObject()->getId()); ?>">Borrar</a>-->
<?php //echo link_to('Borrar2','@botones_delete?id='.$form->getObject()->getId(),'confirm=¿Estás seguro?') ?>