    <footer class="footer">
        <div class="footer__container container">

            <?php get_template_part('includes/svg', 'lightning-bolt');?>

            <div class="row">
                <div class="col-12">
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'menu_class' => 'footer__menu'
                            )
                        );
                    ?>
                    <p class="footer__copyright-text">&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>, All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer();?>

    </body>
</html>