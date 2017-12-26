<td class="text-center">
    <a class="link_actions marginright10" title="Editar" href="/backend_dev.php<?php echo url_for('/button/'.$botones->getId().'/edit') ?>">
        <i class="icon_edit fa fa-pencil-square" aria-hidden="true"></i>
    </a>
    <!--<a class="link_actions" title="Eliminar" onclick="if (confirm('¿Está seguro?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', 'bac272ff6af75c7cd9ff670874eac7dd'); f.appendChild(m);f.submit(); };return false;" href="/backend_dev.php/button/12"><i class="icon_delete fa fa-trash-o" aria-hidden="true"></i></a>-->
    <?php echo $helper->linkToDelete($botones, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
</td>
