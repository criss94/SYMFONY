<div class="container-fluid">
    <div class="col-xs-12 col-md-12 col-lg-9 col-xl-9">
        <?php if (!$pager->getNbResults()): ?>
          <p class="text-bold"><?php echo __('No result', array(), 'sf_admin') ?></p>
          <a href="<?php echo url_for('sf_guard_user_new') ?>" class="btn btn-primary">Agregar nuevo usuario</a>
        <?php else: ?>
            <div class="row col-sm-12 col-md-12">
                <div class="col-sm-4 col-md-4 paddingtop10">
                    <p class="text-bold font13">
                        <?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
                        <?php if ($pager->haveToPaginate()): ?>
                            <?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="col-sm-8 col-md-8 paddingbottom10">
                       <?php if ($pager->haveToPaginate()): ?>
                            <?php include_partial('sf_guard_user/pagination', array('pager' => $pager)) ?>
                        <?php endif; ?>
                </div>
            </div>
          
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
                      <?php include_partial('sf_guard_user/list_th_tabular', array('sort' => $sort)) ?>
                      <!--<th id="sf_admin_list_th_actions"><?php //echo __('Actions', array(), 'sf_admin') ?></th>-->
                      <th class="text-center">
                        <a class="link_actions" title="Agregar" href="<?php echo url_for('@sf_guard_user_new') ?>">
                            <i class="icon_new fa fa-plus" aria-hidden="true"></i>
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th colspan="15">
                        <div class="row col-sm-6 col-md-5 margintop15" style="position: relative;"> 
                            <?php include_partial('sf_guard_user/list_batch_actions', array('helper' => $helper)) ?>
                        </div>
                      </th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($pager->getResults() as $i => $sf_guard_user): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
                      <tr class="sf_admin_row <?php echo $odd ?>">
                        <?php include_partial('sf_guard_user/list_td_batch_actions', array('sf_guard_user' => $sf_guard_user, 'helper' => $helper)) ?>
                        <?php include_partial('sf_guard_user/list_td_tabular', array('sf_guard_user' => $sf_guard_user)) ?>
                        <?php include_partial('sf_guard_user/list_td_actions', array('sf_guard_user' => $sf_guard_user, 'helper' => $helper)) ?>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<script type="text/javascript">
/* <![CDATA[ */
function checkAll()
{
  var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
}
/* ]]> */
</script>
