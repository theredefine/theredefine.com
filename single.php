<?php get_header(); ?>	
	<main class="l-main" role="main">
		<div class="l-site-wrapper-inner ">
			<section class="l-page-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>          
					<h1 class="single_title"><?php the_title(); ?></h1>
					<div class="single_inside_content">
					<?php the_content(); ?>
					</div><!--//single_inside_content-->
					<br /><br />
					<?php //comments_template(); ?>
				<?php endwhile; else: ?>
					<h3>Sorry, no posts matched your criteria.</h3>
				<?php endif; ?>                    
			</section>
			

			
			<?php get_sidebar(); ?>
		</div>
	
	</main><!--//single_cont-->
	
<?php get_footer(); ?>