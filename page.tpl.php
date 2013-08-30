<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta name="description" content="<?php print $site_name; ?>"/> 
<meta name="author" content="Arts and Sciences Technology Services Office"/> 
<meta name="keywords" content="<?php print strtr($site_name, array(" " => ", ")); ?>, Arts and Sciences, OSU, Ohio State"/> 
<?php
global $base_path;
global $theme_path;

$body_classes .= ' layout-'.$GLOBALS['quickSites_layout'];

if(!($front_image || $front_text || $front_links)){
	$body_classes .= ' no-front-header';
}


?>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>

</head>
<body class="<?php print $body_classes; ?>">

	<?php require_once("navbar/osu-navbar.php"); ?>

	<div id="header">
		<div class="container">
			<div id="header-container" class="span-24">
				<?php if(false && !$is_front){ ?>
					<a href="http://artsandsciences.osu.edu/" id="small-banner-1" title="Arts and Sciences homepage">&nbsp;</a>
				<? } ?>
				<a href="/"id="logo"></a>
					<?php if($logo){ ?>
						<?php if(!$is_front){ ?>
						<!-- <a href="<?php global $base_url; print $base_url; ?>" title="Back to <?php print $site_name; ?> home"><img alt="<?php print $site_name; ?>" src="<?php print $logo ?>"/></a> -->
						<?php }else{ ?>
						<!-- <img alt="<?php print $site_name; ?>" src="<?php print $logo ?>"/> -->
						<?php } ?>
					<?php } ?>
				
				<a href="http://www.osu.edu/" id="osulogo" title="Ohio State University homepage" >&nbsp;</a>

				<div id="navigation">
				</div><!-- #navigation -->
			</div>
		</div> <!-- .container -->
	</div> <!-- #header -->
	<div id="headerbar">
		<div class="container">
			<div id="headerbar-menu" class="span-24 container">
				<?php print $headerbar_menu; ?>
			</div>
		</div>
	</div>

	<?php include($is_front ? "front.tpl.php" : "inner.tpl.php"); ?>

	<hr id="footer-border"/>
	<div id="footer">
		<div class="container">
			<?php if(true || !$is_front){ ?>
				<a href="http://artsandsciences.osu.edu/" id="small-banner-2" title="Arts and Sciences homepage">&nbsp;</a>
			<? } ?>
			
			<div id="footer-right" class="span-16 last">
				<div id="footer-top" class="span-16 last">
					<?php print $footer; ?>
				</div>
				<div id="footer-bottom" class="span-16 last">
					<?php print $footer_menu; ?>
				</div>
			</div>
			<div id="contact">
				<?php if(user_access('administer site configuration')){ ?>
				<ul class="tabs primary">
					<li class="active">
						<a class="active" href="<?=url();?>admin/settings/site-information">Edit Text</a>
					</li>
				</ul>
				<?php } ?>
				<?php print $footer_message; ?>
			</div><!-- .contact -->
		</div><!-- .container -->
	</div><!-- #footer -->
	<div id="footer_copyright" class="clearfix">
		<div class="small">
			<p>&copy; <?php print date("Y"); ?>, The Ohio State University, College of Arts and Sciences</p>
			<?php include("icons/uicons_basic.php"); ?>
		</div>
	</div>


<?php print $closure;?>

</body>

</html>
