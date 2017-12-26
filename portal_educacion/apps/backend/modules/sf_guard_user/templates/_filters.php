<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="col-sm-6 col-md-5 col-lg-3 col-xl-3 center-block margintop20">
  <?php if ($form->hasGlobalErrors()): ?>
    <?php echo $form->renderGlobalErrors() ?>
  <?php endif; ?>

  <!-- form q cambia el modo de iniciar sesion en el sistema -->
  <div class="marginbottom40 o-hidden">
      <div class="col-xs-12 col-sm-4 col-md-4 clearpadding"><p class="paddingleft10 font14 text-bold">LOGIN</p></div>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <form action="<?php echo url_for('@cambiar_tipo_login') ?>" method="post">
            <div class="row">
              <div class="col-xs-10 col-md-10">
                  <select name="tipo_de_login" class="form-control">
                      <option <?php if($login_activo->getActivo()){ echo 'selected'; } ?> value="1">Login con Google</option>
                      <option <?php if(!$login_activo->getActivo()){ echo 'selected'; } ?> value="0">Login Básico</option>
                  </select>
              </div>
              <div class="col-xs-2 col-md-2 clearpadding">
                  <input type="submit" value="ok" class="btn btn-primary">
              </div>
            </div>
        </form>
      </div>
  </div>

  <form action="<?php echo url_for('sf_guard_user_collection', array('action' => 'filter')) ?>" method="post">
      <div class="table-responsive">
          <table class="table">
              <tfoot>
                <tr>
                  <td colspan="2">
                    <?php echo $form->renderHiddenFields() ?>
                    <?php echo link_to(__('Reset', array(), 'sf_admin'), 'sf_guard_user_collection', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?>
                      <input class="btn btn-primary" type="submit" value="<?php echo __('Filter', array(), 'sf_admin') ?>" />
                  </td>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?>
                <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
                  <?php include_partial('sf_guard_user/filters_field', array(
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