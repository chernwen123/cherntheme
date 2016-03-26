<footer class = "site-footer">

		<nav class="site-nav">
					<?php
					#takes the pages created as arrays listed on footer.
			$args = array(
				'theme_location' => 'footer'
			);
			?>
			
			<?php wp_nav_menu( $args ); ?>
		</nav>
	
	<p><?php_bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
	
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>