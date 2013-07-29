	<div id="flag-back">&nbsp;</div>

	<div id="front-header">
		<div id="front-header-tile">&nbsp;</div>
		<div id="header-shadow">&nbsp;</div>
		<div id="front-header-banner">
			<div class="container">
				<a href="http://artsandsciences.osu.edu/" id="aslink" title="Arts and Sciences homepage">&nbsp;</a>
			</div>
		</div>
	</div>

	<div id="front-content-container" class="container">


		<div id="main-content" class="container">
			<a id="page-content"></a>
			<div>

				<div class="content"><?php if($quickSites_layout == 'a'){ ?><div><?php } ?>
					<?php if($messages){ ?>
						<div id="message"><?php print $messages; ?></div>
					<?php } ?>
					<div id="front-content" class="span-19 " style="float: none;">
				<?php print $before_front_content ?>
						<?php print $before_content ?>
						<?php print $front_content ?>
						<?php print $after_content ?>
					</div>
					<?php if($front_block1 || $front_block2 || $front_block3){ ?>
					<div id="features">
						<div id="front_block1" class="feature span-19 last">
							<div class="content">
								<?php print $front_block1; ?>
							</div>
						</div>
						<div id="front_block2" class="feature span-9">
							<div class="content">
								<?php print $front_block2; ?>
							</div>
						</div>
						<div id="front_block3" class="feature span-10 last">
							<div class="content">
								<?php print $front_block3; ?>
							</div>
						</div>
					</div>
					<?php } ?>
				</div><?php if($quickSites_layout == 'a'){ ?></div><?php } ?>

	
			</div><!-- #leftcontent-nostyle -->

					<?php if($front_right){ ?>
					<div class="span-5 last" id="front-sidebar-right">
						<?php print $front_right; ?>
					</div> <!-- #sidebar -->
					<?php } ?>
	
		</div>


	</div>


