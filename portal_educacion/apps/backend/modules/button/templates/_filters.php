<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="col-sm-6 col-md-5 col-lg-3 col-xl-3 center-block margintop100">
  <?php if ($form->hasGlobalErrors()): ?>
    <?php echo $form->renderGlobalErrors() ?>
  <?php endif; ?>

    <form action="<?php echo url_for('botones_collection', array('action' => 'filter')) ?>" method="post">
        <div class="table-responsive">
            <table class="table">
                <tfoot>
                    <tr>
                        <td colspan="2">
                            <?php echo $form->renderHiddenFields() ?>
                            <?php echo link_to(__('Reset', array(), 'sf_admin'), 'botones_collection', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?>
                            <input class="btn btn-primary" type="submit" value="<?php echo __('Filter', array(), 'sf_admin') ?>" />
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?>
                    <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
                      <?php include_partial('button/filters_field', array(
                        'name'       => $name,
                        'attributes' => $field->getConfig('attributes', array()),
                        'label'      => $field->getConfig('label'),
                        'help'       => $field->getConfig('help'),
                        'form'       => $form,
                        'field'      => $field,
                        'class'      => 'sf_admin_form_row sf_admin_'.strtolower($field->getType()).' sf_admin_filter_field_'.$name,
                      )) ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </form>
</div>