<section>
    <h2 class="has-text-align-center"><?php echo esc_html( $headline ); ?></h2>
    <div class="grid product-grid">
        <?php foreach ( $products as $product ): ?>
            <div class="col <?php echo esc_attr( $column_size ); ?>"></div>
        <?php endforeach; ?>
    </div>
</section>