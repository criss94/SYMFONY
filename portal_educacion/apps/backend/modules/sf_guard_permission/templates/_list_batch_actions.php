<div class="col-xs-3 col-sm-10 col-md-10 marginbottom20">
    <select name="batch_action" class="form-control">
        <option value=""><?php echo __('Choose an action', array(), 'sf_admin') ?></option>
        <option value="batchDelete"><?php echo __('Delete', array(), 'sf_admin') ?></option>
    </select>
</div>
<div class="col-xs-2 col-sm-2 col-md-2">
    <?php $form = new BaseForm(); if ($form->isCSRFProtected()): ?>
        <input type="hidden" name="<?php echo $form->getCSRFFieldName() ?>" value="<?php echo $form->getCSRFToken() ?>" />
    <?php endif; ?>
    <input class="btn btn-primary" type="submit" value="<?php echo __('go', array(), 'sf_admin') ?>" />
</div>