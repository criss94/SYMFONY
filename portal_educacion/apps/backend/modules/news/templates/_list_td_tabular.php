<td class="text-center">
  <?php echo $noticias->getNotNombre() ?>
</td>
<td class="text-center">
  <figure class="box-images col-center">
     <?php echo image_tag('/uploads/news/'.$noticias->getNotImagen(), array('class' => 'img-responsive', 'size' => '110x80')) ?>
     <!--<img src="<?php //echo url_for('/uploads/news/'.$noticias->getNotImagen()) ?>" class="img-responsive">-->
  </figure>
</td>
<td class="text-center">
  	<?php if($noticias->getNotActivo()): ?>
        <span><i class="icon_new link_actions fa fa-check-circle" aria-hidden="true"></i></span>
    <?php else: ?>
        <span><i class="icon_delete link_actions fa fa-times-circle" aria-hidden="true"></i></span>
	<?php endif; ?>
</td>
