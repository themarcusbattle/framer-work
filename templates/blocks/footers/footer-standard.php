<footer>
    <div class="grid has-text-centered">
        <div class="col one-third">
            <?php 
                if ( has_nav_menu( 'footer-main-menu' ) ) {
                    wp_nav_menu( array( 'theme_location' => 'footer-main-menu' ) ); 
                }
            ?>    
        </div>
        <div class="col one-third">
            <h3><?php echo get_bloginfo(); ?></h3>
            <p class="fineprint">&copy; <?php echo date('Y') . ' ' . get_bloginfo(); ?>. All Rights Reserved.</p>
        </div>
        <div class="col one-third">
            <?php 
                if ( has_nav_menu( 'footer-secondary-menu' ) ) {
                    wp_nav_menu( array( 'theme_location' => 'footer-secondary-menu' ) ); 
                }
            ?>
        </div>
    </div>
</footer>