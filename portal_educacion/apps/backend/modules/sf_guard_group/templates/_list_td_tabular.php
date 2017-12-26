<td class="text-center">
  <?php echo $sf_guard_group->getName() ?>
</td>
<td class="text-center">
  <?php echo $sf_guard_group->getDescription() ?>
</td>
<td class="text-center">
  <?php echo false !== strtotime($sf_guard_group->getCreatedAt()) ? format_date($sf_guard_group->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="text-center">
  <?php echo false !== strtotime($sf_guard_group->getUpdatedAt()) ? format_date($sf_guard_group->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
