<footer class = "website-footer">
    <div class = "container">
    <?php
    wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    'container' => 'nav',
    'container_class' => 'main-menu'
    ));
    ?>
    <div class = "contact-info-menu">
        <p>example@noreply.com</p>
        <p>+1 234 5678</p>
        <p>© <?php echo date('Y'); ?> </p>
    <div class = "social-media">
    <a href="#" class="footer-icon" title="soc-media">
    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Social link">
    </a>
    <a href="#" class="footer-icon" title="soc-media">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Social link">  
    </a> 
</div>
</div>        
</div>

</footer>
<?php wp_footer(); ?>
</body>
</html>