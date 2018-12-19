<header class="<?php echo $classes; ?>">
    <div class="container">
        <div class="grid">
            <div class="col one-half branding has-no-side-margin is-full-on-mobile">
                <?php if ( is_home() ) : ?>
                    <h1 class="logo"><a href="<?php echo home_url(); ?>"><?php echo $logo; ?></a></h1>
                <?php else: ?>
                    <div class="logo"><a href="<?php echo home_url(); ?>"><?php echo $logo; ?></a></div>
                <?php endif; ?>
            </div>
            <div class="col one-half has-text-right has-no-side-margin hide-on-mobile">
                <?php 
                    if ( has_nav_menu( 'header-main-menu' ) ) {
                        wp_nav_menu( [ 
                            'theme_location' => 'header-main-menu',
                            'container'      => 'nav'
                        ] ); 
                    }
                ?> 
            </div>
            <div class="col one-half has-text-right has-no-side-margin hide-on-desktop">
                <?php 
                    if ( has_nav_menu( 'header-main-menu-mobile' ) ) {
                        wp_nav_menu( [ 
                            'theme_location' => 'header-main-menu-mobile',
                            'container'      => 'nav'
                        ] ); 
                    }
                ?>
            </div>
        </div>
    </div>
</header>