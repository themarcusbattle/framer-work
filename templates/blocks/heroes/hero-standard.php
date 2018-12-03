<section class="has-no-padding">
    <div class="hero hero-lg">
        <div class="hero-panel">
            <span class="icon icon-large"><i class="fas fa-<?php echo esc_attr( $icon ); ?>"></i></span>
            <h2 class="headline"><?php echo esc_html( $headline ); ?></h2>
            <p class="subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <div class="button-group">
                <?php if ( $primary_button_link ) : ?><a class="button" href="<?php echo esc_html( $primary_button_link ); ?>"><?php echo esc_html( $primary_button_label ); ?></a><?php endif; ?>
                <?php if ( $secondary_button_link ) : ?><a class="button button-outlined" href="<?php echo esc_html( $secondary_button_link ); ?>"><?php echo esc_html( $secondary_button_label ); ?></a><?php endif; ?>
            </div>
            <span class="icon"><i class="fas fa-angle-down"></i></span>
        </div>
    </div>
</section>