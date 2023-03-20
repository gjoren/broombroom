<?php
	global $post;
	get_header();

?>
<div class="blog-post-wrapper container mx-auto">
	<?php if ( have_posts() ):
		if( has_post_thumbnail() ):?>
			<figure><?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'alt' => $post->post_title )  );?></figure>
		<?php endif;?>

		<?php while ( have_posts() ): the_post(); ?>
            <h1><?php the_title() ?></h1>

           	<?php if( !empty( $subheadline ) ):?>
           		<h2 class="sub-headline"><?php echo $subheadline;?></h2>
            <?php endif;?>

			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>       
</div>
<?php get_footer();
