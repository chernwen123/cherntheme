<?php
get_header();
#output all posts in main page and its content. Headers are hyperlinked.
if(have_posts()) :
	while (have_posts()) : the_post(); ?>
	<article class="post">
		<h2><a href = "<?php the_permalink();?>"> <?php the_title(); ?></a> </h2>
		<?php the_content(); ?>
	</article>
	<?php endwhile;
	
	else:
		echo'<p>No contenct found</p>';
		
		endif;

		
		
get_footer();
?>