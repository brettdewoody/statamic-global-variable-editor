<div class="container">
	<form action="<?php echo $app->urlFor('globes') . '/update' ?>" method="post" class="primary-form">
	<div class="section content">
		
		<?php 
			foreach ($globals as $key => $setting) {
				
		?>
			<div class="input-block input-text">
				<label for="<?php echo $key; ?>"><?php echo Slug::prettify($key); ?></label><input type="text" name="vars[<?php echo $key; ?>]" value="<?php echo $setting; ?>">
			</div>
		<?php
				
			}
		?>
		
		
	</div>
	<div id="publish-action" class="footer-controls push-down">
      <input type="submit" class="btn" value="Save &amp; Publish" id="publish-submit">
    </div>
	</form>
</div>