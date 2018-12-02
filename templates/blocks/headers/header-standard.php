<header>
    <div class="container grid">
        <div class="col one-half branding">
            <?php if ( is_home() ) : ?>
                <h1 class="logo"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo(); ?></a></h1>
            <?php else: ?>
                <div class="logo"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo(); ?></a></div>
            <?php endif; ?>
            <span class="tagline">Here is the tagline.</span>
        </div>
        <div class="col one-half has-text-right">
            <nav>
                <ul>
                    <li><a href="#">Link One</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>