<?php if (count($errors) > 0): ?>
	<div class="error" style="width: 92%;margin: 0px auto;padding: 10px;border: 1px solid #a94442;color: #ffffff;background: #ff1493;border-radius: 5px;text-align: left;">
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>