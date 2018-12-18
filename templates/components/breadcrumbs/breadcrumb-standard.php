<?php

$terms = wp_get_object_terms( get_the_ID(), 'project' );

if ( ! is_wp_error( $terms ) ) {
    $term_name = isset( $terms[0] ) ? $terms[0]->name : '';
    $term_slug = isset( $terms[0] ) ? $terms[0]->slug : '';
}

?>

<section id="<?php echo esc_attr( $id ) ?>" class="has-no-padding has-padding-on-mobile has-text-centered-on-mobile <?php echo $classes; ?>">
    <div class="container">
        <nav>
            <ul class="crumbs">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <?php if ( is_singular( 'update' ) && $term_name ) : ?>
                    <li>/</li>
                    <li><a href="<?php echo home_url( 'projects/' . $term_slug ); ?>"><?php echo esc_html( $term_name ); ?></a></li>
                    <li>/</li>
                    <li><?php the_title(); ?></li>
                <?php else : ?>
                    <li>/</li>
                    <li><?php the_title(); ?></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</section>