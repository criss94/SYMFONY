<?php if ($sf_user->hasFlash('notice')): ?>
	<div class="col-lg-4 col-center">
        <div class="notice alert alert-info text-center text-blue text-size-13">
  			<?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?>
  		</div>
  	</div>
<?php endif; ?>

<?php if ($sf_user->hasFlash('error')): ?>
  	<div class="col-lg-4 col-center">
        <div class="error alert alert-danger text-center text-danger text-size-13">
  			<?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?>
		</div>
	</div>
<?php endif; ?>
