<?php
    get_header();
    $term = get_queried_object();   
    if( $term && isset( $term->taxonomy ) && $term->taxonomy == 'category' ){

        $articles = get_posts( array('posts_per_page' => -1,
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
        $articles = get_posts( array( 'posts_per_page' => -1 ) );
    }
?>
    <main id="page-content" class="posts-archive">
        <div class="wrapper-posts-archive container mx-auto">
            <?php if ( have_posts() ): ?>
                <?php
                $ctr = 1;
                foreach( $articles as $akey => $post ):
                    get_template_part( 'templates/partials/content', 'summary', array( 'post' => $post, 'classes' => 'img-card' ) );
                    if( $ctr == 6 ){
                        do_action('most_read_articles', __( 'AM MEISTEN GELESEN', 'spirah' ).':');
                    }
                    $ctr++;
                endforeach;
                ?>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer();