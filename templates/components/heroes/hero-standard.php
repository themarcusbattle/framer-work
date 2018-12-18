<section class="has-no-padding">
    <div class="<?php echo $classes; ?>" <?php if ( $background_img_url ) : ?>style="background-image: url('<?php echo esc_attr( $background_img_url ); ?>');"<?php endif; ?>>
        <div class="hero-panel">
            <?php if ( $icon ) : ?><span class="icon icon-large"><?php echo $icon; ?></span><?php endif; ?>
            <h2 class="headline"><?php echo esc_html( $headline ); ?></h2>
            <p class="subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <div class="button-group">
                <?php if ( $primary_button_link ) : ?><a class="button" href="<?php echo esc_html( $primary_button_link ); ?>"><?php echo esc_html( $primary_button_label ); ?> <?php if ( $primary_button_icon ) echo "<i class=\"fas $primary_button_icon\"></i>"; ?></a><?php endif; ?>
                <?php if ( $secondary_button_link ) : ?><a class="button button-outlined" href="<?php echo esc_html( $secondary_button_link ); ?>"><?php echo esc_html( $secondary_button_label ); ?></a><?php endif; ?>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</section>