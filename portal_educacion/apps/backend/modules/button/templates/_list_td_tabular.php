<td class="text-center">
  <?php echo $botones->getBtnNombre() ?>
</td>
<td class="text-center">
  <?php echo $botones->getBtnLink() ?>
</td>
<td class="text-center">
  <!--<figure class="box-images col-center">
     <?php //echo image_tag(url_for('/uploads/images/'.$botones->getBtnImagen(), 'class=img-responsive'), 'size=110x80') ?>
     <img src="<?php //echo url_for('/uploads/images/'.$botones->getBtnImagen()) ?>" class="img-responsive">
  </figure>-->
  <span class="<?php echo $botones->getBtnImagen() ?> font28 gray"></span>
</td>
<td class="text-center">
    <?php if($botones->getBtnActivo()): ?>
        <?php //echo $botones->getBtnActivo() ?>
        <span><i class="icon_new link_actions fa fa-check-circle" aria-hidden="true"></i></span>
    <?php else: ?>
        <span><i class="icon_delete link_actions fa fa-times-circle" aria-hidden="true"></i></span>
    <?php endif; ?>
</td>
<td class="text-center">
  <?php echo $botones->getCategorias() ?>
</td>
