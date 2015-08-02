<?php $shortname = "neue"; ?>

<?php if(get_option($shortname.'_twitter_link','') != "") { ?>
	<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" class="social-banner-link"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a>
<?php } ?>
<?php if(get_option($shortname.'_facebook_link','') != "") { ?>
	<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" class="social-banner-link"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a>
<?php } ?>
<?php if(get_option($shortname.'_google_plus_link','') != "") { ?>
	<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>" class="social-banner-link"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" /></a>
<?php } ?>
<?php if(get_option($shortname.'_dribbble_link','') != "") { ?>
	<a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>" class="social-banner-link"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" /></a>
<?php } ?>
<?php if(get_option($shortname.'_pinterest_link','') != "") { ?>
	<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>" class="social-banner-link"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" /></a>
<?php } ?>