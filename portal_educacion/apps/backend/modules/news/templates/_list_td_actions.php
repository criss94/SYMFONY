<td class="text-center">
	<a class="link_actions marginright10" title="Editar" href="/backend_dev.php<?php echo url_for('/news/'.$noticias->getId().'/edit') ?>"><i class="icon_edit fa fa-pencil-square" aria-hidden="true"></i></a>
	<?php //echo link_to(' ','noticias_edit', $noticias,'class=icon_edit fa fa-pencil-square link_actions marginright10') ?>
    <?php //echo $helper->linkToEdit($noticias, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($noticias, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
</td>
