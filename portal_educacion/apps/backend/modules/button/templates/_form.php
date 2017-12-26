<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 col-center">
  <?php echo form_tag_for($form, '@botones') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('button/form_fieldset', array('botones' => $botones, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>
    <?php include_partial('button/form_actions', array('botones' => $botones, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>