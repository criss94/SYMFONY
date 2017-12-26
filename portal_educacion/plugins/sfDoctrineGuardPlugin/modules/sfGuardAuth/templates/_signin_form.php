<?php use_helper('I18N') ?>
<?php slot('title') ?>
  Portal Educación
<?php end_slot() ?>

<!-- formulario de login -->
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    
    <!-- muestro errores de validacion -->
    <?php if($form['username']->getError() != ''): ?>
        <div class="alert alert-danger"><?php echo $form['username']->renderError() ?></div>
    <?php endif; ?>
    <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
          <?php echo $form['username']->render( array('class' => 'form-control', 'placeholder' => 'Usuario', 'required' => true) ) ?>
        </div>
    </div>  
    <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
          <?php echo $form['password']->render( array('class' => 'form-control', 'placeholder' => 'Contraseña', 'required' => true) ) ?>
        </div>
    </div>
    <div class="checkbox text-left">
        <label><?php echo $form['remember']->render() ?> Recordarme</label>
    </div>
    
    <!-- muestro campos ocultos de tipo hidden -->
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="<?php echo __('Ingresar', null, 'sf_guard') ?>" class="btn btn-lg btn-primary btn-block"/>
    <!-- <a href="#">Recuperar Contraseña</a> -->
         
    <?php $routes = $sf_context->getRouting()->getRoutes() ?>
    <?php if (isset($routes['sf_guard_forgot_password'])): ?>
      <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Recuperar Contraseña', null, 'sf_guard') ?></a>
    <?php endif; ?>

    <?php if (isset($routes['sf_guard_register'])): ?>
      &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
    <?php endif; ?>

</form>