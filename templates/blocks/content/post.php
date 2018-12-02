<section>
    <div class="grid content">
        <div id="post-content" class="col one-half">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post-thumbnail"></div>
                <div class="post-content">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <span class="post-date"><?php the_date(); ?></span> | 
                        <span class="post-author"><?php the_author(); ?></span>
                    </div>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <aside id="sidebar" class="col">
            <?php get_search_form(); ?>
        </aside>
    </div>
</section>