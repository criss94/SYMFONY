<ul class="btn-group-md btn-group-vertical col-xs-12 col-sm-12 col-md-12 margintop10">
<?php if ($form->isNew()): ?>
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  <?php //echo $helper->linkToList(array(  'label' => 'Volver',  'params' =>   array(  ),  'class_suffix' => 'list',)) ?>
  <a class="btn btn-primary" href="<?php echo url_for('@sf_guard_user') ?>">Volver</a>
  <?php //echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
  <input class="btn btn-primary" type="submit" value="Guardar">
  <?php //echo $helper->linkToSaveAndAdd($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_add',  'label' => 'Save and add',)) ?>
  <input class="btn btn-primary" type="submit" name="_save_and_add" value="Guardar y agregar otro">
<?php else: ?>
  <?php //echo $helper->linkToList(array(  'label' => 'Volver',  'params' =>   array(  ),  'class_suffix' => 'list',)) ?>
  <?php //echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
  <a class="btn btn-primary" href="<?php echo url_for('@sf_guard_user') ?>">Volver</a>
  <input class="btn btn-primary" type="submit" value="Editar">
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  <?php echo $helper->linkToSaveAndAdd($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_add',  'label' => 'Save and add',)) ?>
<?php endif; ?>
</ul>
