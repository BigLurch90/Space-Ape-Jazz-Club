       <!-- Site footer -->
       <footer class="site-footer">

<figure class="site-footer__backgraund">
    <img src="<?php echo get_template_directory_uri(); ?>./assets/image/footer-backgraund.jpg" alt="">
    <div class="site-footer__backgraund-dim"></div>
</figure>

<div class="site-footer__inner">

    <div class="site-footer__content">

        <div class="site-footer__location">
            <h4>Location:</h4>
            <p><?php echo get_theme_mod( 'sajc_club_street') ?></p>
            <p><?php echo get_theme_mod( 'sajc_club_city') ?></p>
            <p><?php echo get_theme_mod( 'sajc_club_zipcode') ?></p>
        </div>

        <nav class="site-footer__about">
            <h4>About:</h4>
            <?php 
                $args = array(
                    'container' => 'ul',
                    'menu_class' => 'site-footer__list'
                );
                
                wp_nav_menu( $args ); 
            ?>
        </nav>


        <nav class="site-footer__about">
            <h4>Open:</h4>
            <p>Monday - Thurday: <br><?php echo get_theme_mod( 'sajc_club_open_one') ?></p>
            <p>Friday - Saturday: <br><?php echo get_theme_mod( 'sajc_club_open_two') ?></p>
            <p>Sunday: <br><?php echo get_theme_mod( 'sajc_club_open_three') ?></p>
        </nav>

    </div>

    <span class="site-footer__copyright">Copyright <?php echo date('Y'); ?>, all right preservd to <?php bloginfo( 'name' );  ?>.</span>

</div>

</footer>

</div>
<?php wp_footer(); ?>
</body>

</html>