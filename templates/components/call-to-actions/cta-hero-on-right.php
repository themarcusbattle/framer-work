<section id="<?php echo esc_attr( $id ); ?>" class="component cta-component <?php echo esc_attr( $classes ); ?>" <?php if ( $background_img_url ) : ?>style="background-image: url('<?php echo esc_attr( $background_img_url ); ?>');"<?php endif; ?>>
    <div class="container">
        <div class="grid">
            <div class="col one-half is-full-on-mobile">
                <h2><?php echo esc_html( $headline ); ?></h2>
                <p class="subtitle"><?php echo esc_html( $subtitle ); ?></p>
                <div class="button-group">
                    <?php if ( $primary_button_link ) : ?><a class="button" href="<?php echo esc_html( $primary_button_link ); ?>"><?php echo esc_html( $primary_button_label ); ?></a><?php endif; ?>
                    <?php if ( $secondary_button_link ) : ?><a class="button button-outlined" href="<?php echo esc_html( $secondary_button_link ); ?>"><?php echo esc_html( $secondary_button_label ); ?></a><?php endif; ?>
                </div>
            </div>
            <div class="col one-half"></div>
        </div>
    </div>
</section>