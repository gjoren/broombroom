<?php
	get_header();
	$term = get_queried_object();	
	if( $term && isset( $term->taxonomy ) && $term->taxonomy == 'category' ){

		$articles = get_posts( array('posts_per_page' => 13,
									'tax_query'      => array(
									            array(
									                'taxonomy'  => 'category',
									                'field'     => 'slug',
									                'terms'     => sanitize_title( $term->slug )
									            )
									        )
									)
							);
	}else{
		$articles = get_posts( array( 'posts_per_page' => 13 ) );
	}
?>
    <main id="page-content" class="posts-archive">    	
		<?php if ( have_posts() ): ?>
			<?php 
				foreach( $articles as $akey => $post ):
            		get_template_part( 'templates/partials/content', 'summary', array( 'post' => $post ) );    
				endforeach;
			?>
		<?php endif; ?>
    </main>
<?php get_footer();