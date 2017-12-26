<nav aria-label="Page navigation" class="clearfix">
    <ul class="pagination pagination-sm pull-right" style="margin: 0">
        <li><a class="btn btn-secundary" title="Primera Página" href="<?php echo url_for('@sf_guard_user') ?>?page=1"><i class="fa fa-fast-backward" aria-hidden="true"></i></a></li>
        <li><a aria-label="Previous" title="Página Anterior" href="<?php echo url_for('@sf_guard_user') ?>?page=<?php echo $pager->getPreviousPage() ?>"><i class="fa fa-step-backward" aria-hidden="true"></i></a></li>
        
        <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
                <li class="active"><a><?php echo $page ?></a></li>
            <?php else: ?>
                <li><a href="<?php echo url_for('@sf_guard_user') ?>?page=<?php echo $page ?>"><?php echo $page ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>

        <li><a aria-label="Next" title="Página Siguiente" href="<?php echo url_for('@sf_guard_user') ?>?page=<?php echo $pager->getNextPage() ?>"><i class="fa fa-step-forward" aria-hidden="true"></i></a></li>
        <li><a class="btn btn-secundary" title="Última página" href="<?php echo url_for('@sf_guard_user') ?>?page=<?php echo $pager->getLastPage() ?>"><i class="fa fa-fast-forward" aria-hidden="true"></i></a></li>
    </ul>
</nav>