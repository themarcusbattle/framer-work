<?php

function battle_load_chameleon() {
    wp_enqueue_style( 'nunito-font', 'https://fonts.googleapis.com/css?family=Nunito' );
    wp_enqueue_style( 'fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
    wp_enqueue_style( 'chameleon', get_template_directory_uri() . '/inc/chameleon/css/chameleon.css' );
}

add_action( 'wp_enqueue_scripts', 'battle_load_chameleon' );

class Framer {

    public function _hero( string $type = 'standard', array $attrs = [] ) {

        extract( $attrs );

        $icon                   = isset( $icon ) ? $icon : 'chess-knight';
        $headline               = isset( $headline ) ? $headline : 'Battle Framework';
        $subtitle               = isset( $subtitle ) ? $subtitle : 'We made it so beautiful and simple. It combines landings, pages, blogs, and shop screens. It is definitely the tool you need in your collection.';
        $primary_button_label   = isset( $primary_button_label ) ? $primary_button_label : 'Buy Now';
        $primary_button_link    = isset( $primary_button_link ) ? $primary_button_link : '#';
        $secondary_button_label = isset( $secondary_button_label ) ? $secondary_button_label : 'Learn More';
        $secondary_button_link  = isset( $secondary_button_link ) ? $secondary_button_link : '#';

        include( self::get_block( "heroes/hero-{$type}" ) );
    }

    public function _product_grid( string $type = 'standard', array $attrs = [] ) {

        extract( $attrs );

        $headline    = isset( $headline ) ? $headline : 'Products';
        $count       = isset( $count ) ? $count : 4;
        $column_size = isset( $column_size ) ? $column_size : 'one-half';

        $products = [ 'one', 'two', 'three' ];

        include( self::get_block( "ecommerce/product-grid-{$type}" ) );
    }

    public function _recent_posts( int $count = 3 ) {
        include( self::get_block( "recent-posts" ) );
    }

    public function _header( string $type = 'standard' ) {
        include( self::get_block( "headers/header-{$type}" ) );
    }

    public function _content( string $type = 'post' ) {
        include( self::get_block( "content/{$type}" ) );
    }

    public function _footer( string $type = 'standard' ) {
        include( self::get_block( "footers/footer-{$type}" ) );
    }

    private function get_block( string $template = '' ) : string {

        $template_path = locate_template( 'templates/blocks/' . $template . '.php', false, false );

        if ( empty( $template_path ) ) {
            return false;
        }

        return $template_path;
    }
}