<footer>
    <div class="container">
        <div class="grid has-text-centered">
            <div class="col one-third is-full-on-mobile">
                <?php 
                    if ( has_nav_menu( 'footer-main-menu' ) ) {
                        wp_nav_menu( [
                            'theme_location' => 'footer-main-menu',
                            'menu_class'     => 'menu horizontal',
                        ] ); 
                    }
                ?>
            </div>
            <div class="col one-third is-full-on-mobile">
                <h3 class="logo"><a href="<?php echo home_url(); ?>"><?php echo $logo; ?></a></h3>
                <p class="fineprint">&copy; <?php echo date('Y') . ' ' . get_bloginfo(); ?>. All Rights Reserved.</p>
            </div>
            <div class="col one-third is-full-on-mobile">
                <?php 
                    if ( has_nav_menu( 'footer-secondary-menu' ) ) {
                        wp_nav_menu( [
                            'theme_location' => 'footer-secondary-menu',
                            'menu_class'     => 'menu horizontal',
                        ] ); 
                    }
                ?>
            </div>
        </div>
    </div>
</footer>