<section class="has-no-padding">
<div class="hero" <?php if ( $background_img_url ) : ?>style="background-image: url('<?php echo esc_attr( $background_img_url ); ?>');"<?php endif; ?>>
        <div class="hero-panel">
            <?php if ( $headline ) : ?><h1><?php echo esc_html( $headline ); ?></h1><?php endif; ?>
            <p><?php echo esc_html( $subtitle ); ?></p>
        </div>
    </div>
</section>