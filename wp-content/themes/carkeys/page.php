<?php
	get_header();
	global $post;
?>
    <main id="page-content">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>
                <div class="page-wrapper<?php echo is_shop() ? ' container shop-inner' : '';?><?php echo is_cart() ? ' container cart-container' : '';?><?php echo is_account_page() ? ' container account-container' : '';?>">
                    <?php if( $post->ID == get_option('woocommerce_myaccount_page_id') ): do_action('account_breadcrumbs'); endif;?>
                	<?php if( !is_shop() && !is_front_page() ):?>
                    	<h1><?php the_title() ?></h1>
                    <?php endif;?>
                    <?php the_content(); ?>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </main>
<?php
	get_footer();