<?php
get_header();
#Separate page controller unique to slug title about
if(have_posts()) :
	while (have_posts()) : the_post(); ?>
	<article class="post page">
		<div class="column-container clearfix">
		
		<div class="title-column">
		<h1><?php the_title(); ?></h1>
		</div>
		<div class="text-column">
		<?php the_content(); ?>
		</div>
		</div>
		
	</article>
	<?php endwhile;
	
	else:
		echo'<p>No contenct found</p>';
		
		endif;

		
		
get_footer();
?>