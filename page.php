<?php
get_header();
#controls all pages
if(have_posts()) :
	while (have_posts()) : the_post(); ?>
	<article class="post">
		<h2> <?php the_title(); ?> </h2>
		<?php the_content(); ?>
	</article>
	<?php endwhile;
	
	else:
		echo'<p>No contenct found</p>';
		
		endif;

		
		
get_footer();
?>