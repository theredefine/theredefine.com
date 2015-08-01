<div class="load_more_cont">
	        
    <?php
    
    ob_start();
	next_posts_link('next');
	$buffer = ob_get_contents();
	ob_end_clean();	
	if(!empty($buffer)) echo $buffer;
    ?>
                        

	<?php wp_reset_query(); ?>  
</div>

<div class="loop-thumbnail-wrapper">
	<? while (have_posts()) : the_post(); ?>                        
	    
	    <a href="<?php the_permalink(); ?>" class="loop-thumbnail-item apply-vertical-rhythm">
		
			<?php the_post_thumbnail('home-image', array('class' => 'loop-thumbnail-image' )); ?>

			<div class="loop-thumbnail-meta meta-data">
				<div class="meta-category color-highlight">
					<?php
						$categories = get_the_category();
						foreach($categories as $key => $category) { 
						    if ($categories[$key + 1]) { // if there's a category+1, ech a comma
		 					    echo $category->cat_name . ', '; 
						    } else { // if not, no comma
							    echo $category->cat_name . ' '; 
						    }
						} 
					?>
				</div>
				<h2><?php the_title(); ?></h2>
				<?php if( get_field('tagline') ): ?>
					<div class="meta-tagline"><?php the_field('tagline'); ?></div>
				<?php endif; ?>
				<div class="meta-date">
					<?php the_date(); ?>
				</div>
			</div>
		</a>

	<?php endwhile; ?>
</div>