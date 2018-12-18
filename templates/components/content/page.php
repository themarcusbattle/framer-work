<section>
    <div class="grid content">
        <div id="post-content" class="col one-half is-full-on-mobile">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post">
                    <div class="post-thumbnail"></div>
                    <div class="post-content">
                        <?php if ( is_archive() ) : ?>
                            <h1 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php else: ?>
                            <h1 class="post-title"><?php the_title(); ?></h1>
                        <?php endif; ?>

                        <?php if ( is_archive() ) : the_excerpt(); ?>
                            <a href="<?php echo get_permalink(); ?>" class="button sz-small">Read More</a>
                        <?php else: the_content(); endif; ?>
                    </div>
                    <?php 
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif; 
                    ?>
                    <?php if ( is_archive() ) : ?>
                        <div class="">
                            <?php if ( comments_open() ) // comments_link(); ?>
                            <?php edit_post_link(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="navigation"><p><?php posts_nav_link(); ?></p></div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <aside id="sidebar" class="col is-full-on-mobile">
            <?php //get_search_form(); ?>
        </aside>
    </div>
</section>