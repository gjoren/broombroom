<?php
	get_header();
	global $post;
?>
    <main id="page-content">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>
                <div class="page-wrapper container">
                    <h1><?php the_title() ?></h1>
                    <?php woocommerce_content(); ?>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </main>
<?php
	get_footer();