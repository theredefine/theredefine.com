<?php get_header(); ?>	
<?php $shortname = "neue"; ?>
<main class="l-main" role="main">

	<div class="l-site-wrapper-inner">

	    <?php
	    global $wp_query;
	        
	    $args = array_merge( $wp_query->query, array( 'posts_per_page' => 12 ) );
	    query_posts( $args );        
	    
	    get_template_part( 'partials/loop', 'thumbnails' ); ?>  
	    
    </div>                          
    
  
</main>
<?php get_footer(); ?>