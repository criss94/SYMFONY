<td class="text-center">
  <?php echo $sf_guard_user->getFirstName() ?>
</td>
<td class="text-center">
  <?php echo $sf_guard_user->getLastName() ?>
</td>
<td class="text-center">
  <?php echo $sf_guard_user->getEmailAddress() ?>
</td>
<td class="text-center">
  <?php echo $sf_guard_user->getUsername() ?>
</td>
<td class="text-center">
    <?php if($sf_guard_user->getIsActive()): ?>
        <?php //echo $botones->getBtnActivo() ?>
        <i class="icon_new link_actions fa fa-check-circle" aria-hidden="true"></i>
    <?php else: ?>
        <i class="icon_delete link_actions fa fa-times-circle" aria-hidden="true"></i>
    <?php endif; ?>
</td>
<td class="text-center">
    <?php if($sf_guard_user->getIsSuperAdmin()): ?>
        <?php //echo $botones->getBtnActivo() ?>
        <i class="icon_new link_actions fa fa-check-circle" aria-hidden="true"></i>
    <?php else: ?>
        <i class="icon_delete link_actions fa fa-times-circle" aria-hidden="true"></i>
    <?php endif; ?>
</td>
<td class="text-center">
  <?php echo false !== strtotime($sf_guard_user->getCreatedAt()) ? format_date($sf_guard_user->getCreatedAt(), "f") : '&nbsp;' ?>
</td>