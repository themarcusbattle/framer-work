<header>
    <div class="container grid">
        <div class="col one-half branding">
            <?php if ( is_home() ) : ?>
                <h1 class="logo"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo(); ?></a></h1>
            <?php else: ?>
                <div class="logo"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo(); ?></a></div>
            <?php endif; ?>
        </div>
        <div class="col one-half has-text-right">
            <?php 
                if ( has_nav_menu( 'header-main-menu' ) ) {
                    wp_nav_menu( array( 'theme_location' => 'header-main-menu' ) ); 
                }
            ?> 
        </div>
    </div>
</header>