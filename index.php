<?php get_header(); ?>
		<main class="blog__main" tabindex="-1">
<?php
	if (is_home() && !is_paged() && function_exists('jps_')) {
?>
			<section class="blog__main__">
				<?php /* TODO: @fedtti */ ?>
			</section>
<?php
	}
?>
		</main>
		<?php get_footer(); ?>
		<script src="<?php bloginfo('stylesheet_directory') ?>/js/main.js"></script> <!-- TODO: @fedtti -->
	</body>
</html>
