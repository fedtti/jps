<?php get_header(); ?>
		<main class="blog__main" role="main" tabindex="-1">
<?php
	/**
	 * 
	 */
	if (is_home() && !is_paged() && function_exists('jps_')) { // TODO: @fedtti
?>
			<section aria-label="<?php _e('Abstract', 'jps'); ?>" class="blog__main__abstract">
				<?php /* TODO: @fedtti */ ?>
			</section>
<?php
	}

	/**
	 * 
	 */
	// TODO: @fedtti
?>
		</main>
		<?php get_footer(); ?>
		<!-- TODO: @fedtti -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script> <!-- TODO: @fedtti -->
	</body>
</html>
