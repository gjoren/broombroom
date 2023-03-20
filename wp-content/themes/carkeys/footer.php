<footer class="site-footer">
    <div class="container">
        <?php if( is_active_sidebar('footer_widget') ):?>
            <div class="footer-widgets-area">
                <?php dynamic_sidebar( 'footer_widget' );?>
            </div>
        <?php endif;?>
    </div>
    <div class="container">
        <?php //echo wp_nav_menu(array('theme_location' => 'footer_menu', 'container_class' => 'menu')); ?>
        <div class="copyright-text">            
            © Carkey on Demand <?php echo date('Y')?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
