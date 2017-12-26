<td class="text-center">
  <?php echo $sf_guard_permission->getName() ?>
</td>
<td class="text-center">
  <?php echo $sf_guard_permission->getDescription() ?>
</td>
<td class="text-center">
  <?php echo false !== strtotime($sf_guard_permission->getCreatedAt()) ? format_date($sf_guard_permission->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="text-center">
  <?php echo false !== strtotime($sf_guard_permission->getUpdatedAt()) ? format_date($sf_guard_permission->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
