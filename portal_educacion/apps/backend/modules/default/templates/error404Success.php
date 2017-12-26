<?php decorate_with(dirname(__FILE__).'/defaultLayout.php') ?>

<div class="container">
    <div class="vertical_center">
        <?php echo image_tag('/images/error404.png', array('alt' => 'page not found', 'class' => 'img-responsive img_vertical')) ?>
    </div>
    <div class="text-center paddingbottom40">
        <li class="btn btn-secundary"><a href="javascript:history.go(-1)">volver</a></li>
    </div>
</div>

