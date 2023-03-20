<?php get_header(); 
$args = array(
    'post_type' => array( 'post', 'product' ),
    's' => sanitize_text_field( get_search_query() ),
    'posts_per_page' => -1,
    'orderby' => 'date',
    'suppress_filters' => false    
);
$search = get_posts( $args );
?>
    <main id="page-content">
        <div class="search-page-wrapper container mx-auto">
            <h2><?php echo $num . ' '. __('Search results found for:','carkeys') . ': '.get_search_query() ?></h2>
            <?php if ( $search ): ?>
                <div class="search-results">
                    <?php
                    foreach( $search as $post ):
                        get_template_part( 'templates/partials/content', 'summary', array( 'post' => $post, 'is_search' => true ) );
                    endforeach;
                    ?>
                </div>
            <?php else:?>
                <div class="em-item page-not-found-item">
                    <div class="page-not-found-caption">
                        <p><?php _e('No search results were found.', 'spirah'); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?>