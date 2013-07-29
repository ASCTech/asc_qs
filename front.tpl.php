<div id="front-content-container" class="container">

	<?php print $before_front_content ?>
	<?php print $before_content ?>
	<?php print $after_content ?>

	<div id="main-content" class="container">
		<a id="page-content"></a>

		<?php if($messages){ ?>
			<div id="message"><?php print $messages; ?></div>
		<?php } ?>
		
		<div class="content">
			<?php print $front_content ?>
		</div>
	</div>
</div>
