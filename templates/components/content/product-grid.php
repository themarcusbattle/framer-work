<section class="product-grid <?php echo $classes; ?>">
    <div class="container">
        <h2 class="headline"><?php echo esc_html( $headline ); ?></h2>
        <div class="grid">
            <?php if ( $post_query->have_posts() ) : ?>
                <!-- The Loop -->
                <?php while ( $post_query->have_posts() ) : 
                    $post_query->the_post();
                    $product_price = get_post_meta( get_the_ID(), '_price', true );
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>

                    <div class="col post-preview is-full-on-mobile <?php echo esc_attr( $column_size ); ?>">
                        <a href="<?php the_permalink(); ?>">
                            <div class="media thumbnail">
                                <img src="<?php echo $image_url[0]; ?>" />
                            </div>
                            <div class="post-preview-meta has-text-centered">
                                <span class="product-title"><?php the_title(); ?></span>
                                <span class="product-price"><?php echo get_woocommerce_currency_symbol() . esc_attr( $product_price ); ?></span>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
                <a class="button" href="<?php echo $primary_button_link ?>"><?php echo esc_attr( $primary_button_label ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>