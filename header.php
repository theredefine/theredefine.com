<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head> 
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
  <?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

  <!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->              
  <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-latest.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js" type="text/javascript" charset="utf-8"></script>    
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
</head>
<body>
<?php $shortname = "neue"; ?>
 <?php if(get_option($shortname.'_background_image_url','') != "") { ?>
<style type="text/css">
  body { background-image: url('<?php echo get_option($shortname.'_background_image_url',''); ?>'); }
</style>
<?php } ?>
<div id="main_container">
	<div id="header">
		
		<div class="header_menu">
			<div class="hamburger mobile-only">
				<div></div>
		        <div></div>
		        <div></div>
			</div>
			<div class="menu-item-wrapper">
				<div class="head_social">
					<?php if(get_option($shortname.'_twitter_link','') != "") { ?>
						<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_facebook_link','') != "") { ?>
						<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_google_plus_link','') != "") { ?>
						<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_dribbble_link','') != "") { ?>
						<a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_pinterest_link','') != "") { ?>
						<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" /></a>
					<?php } ?>
					<div class="clear"></div>
				</div><!--//head_social-->
				<?php wp_nav_menu('menu=header_menu&container=false&menu_id='); ?>
			</div>
		</div><!--//header_menu-->

		<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
		  <a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" /></a>
		<?php } else { ?>
		  <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg" class="logo" /></a>
		<?php } ?> 
	
		
	</div><!--//header-->