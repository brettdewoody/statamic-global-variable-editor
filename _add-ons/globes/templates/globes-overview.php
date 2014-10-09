<div class="container">
	<form action="<?php echo $app->urlFor('globes') . '/update' ?>" method="post" class="primary-form">
	<div class="section content">
		
		<?php 
			foreach ($settings as $key => $setting) {
				if (substr($key,0,7) == 'global_' ) {
		?>
			<div class="input-block input-text">
				<label for="<?=$key?>"><?= Slug::prettify(substr($key,7)) ?></label><input type="text" name="vars['<?= $key ?>']" value="<?= $setting ?>">
			</div>
		<?php
				}
			}
		?>
		
		
	</div>
	<div id="publish-action" class="footer-controls push-down">
      <input type="submit" class="btn" value="Save &amp; Publish" id="publish-submit">
    </div>
	</form>
</div>