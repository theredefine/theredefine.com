<?php get_header(); ?>	
<?php $shortname = "neue"; ?>
<main class="l-main" role="main">

	<div class="l-site-wrapper-inner">
		<h1>search.php</h1>

	    <?php
	    global $wp_query;
	        
	    $args = array_merge( $wp_query->query, array( 'posts_per_page' => 12 ) );
	    query_posts( $args );        
	    
	    get_template_part( 'partials/loop', 'thumbnails' ); ?>  
	    
	    

	    
	    <div class="load_more_cont">
	        <div align="center"><div class="load_more_text">
	        
	        <?php
	        
	        ob_start();
			next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/loading-button.png" />');
			$buffer = ob_get_contents();
			ob_end_clean();	
			if(!empty($buffer)) echo $buffer;
	        ?>
	        
	        </div>
	        </div>
	    </div><!--//load_more_cont-->                    
	    
	    <?php wp_reset_query(); ?>  
    </div>                          
    
  
</main>
<?php get_footer(); ?>