<? while (have_posts()) : the_post(); ?>                        
    
    <a href="<?php the_permalink(); ?>" class="loop-thumbnail-wrapper">
	
		<?php the_post_thumbnail('home-image', array('class' => 'loop-thumbnail-image' )); ?>

		<div class="loop-thumbnail-meta meta-data">
			<div class="meta-category color-highlight">
				<?php
					foreach((get_the_category()) as $category) { 
					    echo $category->cat_name . ' '; 
					} 
				?>
			</div>
			<h3><?php the_title(); ?></h3>
			<?php if( get_field('tagline') ): ?>
				<div class="meta-tagline"><?php the_field('tagline'); ?></div>
			<?php endif; ?>
			<div class="meta-date">
				<?php the_date(); ?>
			</div>
		</div>
	</a>

<?php endwhile; ?>