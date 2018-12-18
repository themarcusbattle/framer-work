<section>
    <div class="container">
        <div class="grid">
            <h2><?php echo esc_html( $headline ); ?></h2>
            <?php echo apply_filters( 'the_content', $content ); ?>
        </div>
    </div>
</section>