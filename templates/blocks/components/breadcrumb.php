<?php

$terms     = wp_get_object_terms( get_the_ID(), 'project' );
$term_name = isset( $terms[0] ) ? $terms[0]->name : '';
$term_slug = isset( $terms[0] ) ? $terms[0]->slug : '';

?>

<section id="breadcrumb" class="has-padding">
    <div class="container">
        <nav>
            <ul class="crumbs">
                <?php if ( is_singular( 'update' ) && $term_name ) : ?>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li>/</li>
                    <li><a href="<?php echo home_url( 'projects/' . $term_slug ); ?>"><?php echo esc_html( $term_name ); ?></a></li>
                    <li>/</li>
                    <li><?php the_title(); ?></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</section>