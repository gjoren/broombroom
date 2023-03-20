<footer>
    <div class="container">
        <?php echo wp_nav_menu(array('theme_location' => 'footer_menu', 'container_class' => 'menu')); ?>
        <div class="copyright-text">            
            © Carkey on Demand <?php echo date('Y')?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
