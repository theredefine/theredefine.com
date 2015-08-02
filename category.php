<?php
/*
Template Name: Index Page
*/
?>

<?php get_header(); ?>	
<?php 
	$shortname = "neue"; 
	$this_page_slug = (is_front_page() ? get_page_by_path('/index')->ID : get_page_by_path($post->post_name)->ID)
?>
<main class="l-main" role="main">
	<div class="hero-wrapper">
		<?php 
			echo '<img src="' . get_field('hero_image', $this_page_slug) . '" class="hero-image" />';
		 ?>
		 <div class="l-site-wrapper-inner">
		 	<h2>
				<?php  echo get_field('hero_text', $this_page_slug)?>
			</h2>
		</div>
	</div>


	<div class="l-site-wrapper-inner ">

	    <?php
	    global $wp_query;
	        
	    $args = array_merge( $wp_query->query, array( 'posts_per_page' => 12 ) );
	    query_posts( $args );        
	    
	    get_template_part( 'partials/loop', 'thumbnails' ); ?>  
	    
    </div>                          
    
  
</main>
<?php get_footer(); ?>