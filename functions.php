<?php

// namespace Framer;

class Framer {

    public static function register() {

        $plugin = new self();

        add_action( 'wp_enqueue_scripts', [ $plugin, 'load_chameleon' ] );
    }

    function load_chameleon() {
        wp_enqueue_style( 'fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
        wp_enqueue_style( 'chameleon', get_template_directory_uri() . '/inc/chameleon/css/chameleon.css' );
        wp_enqueue_script( 'chameleon', get_template_directory_uri() . '/inc/chameleon/js/chameleon.js' );
    }

    public function _header( string $type = 'standard', array $options = [] ) {

        extract( $options );

        $logo_url = $logo_url ?? '';
        $logo     = self::generate_logo( $logo_url );

        $classes  = $classes ?? [];
        $classes  = self::create_class_list( $classes );

        include( self::get_component( "headers/header-{$type}" ) );
    }

    public function _breadcrumb( string $type = 'standard', array $options = [] ) {

        extract( $options );

        $id       = $id ?? 'breadcrumb';
        $classes  = $classes ?? [];
        $classes  = self::create_class_list( $classes );

        include( self::get_component( "breadcrumbs/breadcrumb-{$type}" ) );
    }

    public function _hero( string $type = 'standard', array $attrs = [] ) {

        extract( $attrs );

        $id                     = $id ?? '';
        $icon                   = $icon ?? '';
        $headline               = isset( $headline ) ? $headline : '';
        $subtitle               = isset( $subtitle ) ? $subtitle : 'We made it so beautiful and simple. It combines landings, pages, blogs, and shop screens. It is definitely the tool you need in your collection.';
        $primary_button_label   = $primary_button_label ?? 'Buy Now';
        $primary_button_link    = $primary_button_link ?? '';
        $secondary_button_label = isset( $secondary_button_label ) ? $secondary_button_label : 'Learn More';
        $secondary_button_link  = isset( $secondary_button_link ) ? $secondary_button_link : '';
        $background_img_url     = isset( $background_img_url ) ? $background_img_url : '';

        $has_overlay            = $has_overlay ?? false;

        $classes = $classes ?? [];
        $classes = self::create_class_list( $classes, [
            'hero',
            'hero-lg'
        ] );

        include( self::get_component( "heroes/hero-{$type}" ) );
    }

    public function _content( string $type = 'post', array $options = [] ) {

        extract( $options );

        $id             = $id ?? '';
        $headline       = $headline ?? '';
        $post_type      = $post_type ?? '';
        $result_count   = $result_count ?? 10;
        $column_size    = $column_size ?? 'one-half';
        $content_source = $content_source ?? ''; // Allows you to dynamically pull content from another page.

        // Query post types for the content.
        if ( $post_type ) {
            $post_query = self::query_posts( [
                'post_type'      => $post_type,
                'posts_per_page' => $result_count,
            ] );
        }

        // Dynamically retrieve content from source.
        if ( $content_source ) {

            $prepared_content = self::get_content_from_source( $content_source );

            extract( $prepared_content );
        }

        $classes = $classes ?? [];
        $classes = self::create_class_list( $classes );

        include( self::get_component( "content/{$type}" ) );

        // Reset the post data just in case a post query was performed.
        wp_reset_postdata();
    }

    public function _call_to_action( string $type = 'standard', array $options = [] ) {

        extract( $options );

        $id       = $id ?? '';
        $headline = $headline ?? '';
        $subtitle = $subtitle ?? '';

        $classes = $classes ?? [];
        $classes = self::create_class_list( $classes );

        include( self::get_component( "call-to-actions/cta-{$type}" ) );
    }

    public function _footer( string $type = 'standard', array $options = [] ) {

        extract( $options );

        $id       = $id ?? '';
        $logo_url = $logo_url ?? '';
        $logo     = self::generate_logo( $logo_url );

        include( self::get_component( "footers/footer-{$type}" ) );
    }

    private function get_component( string $template = '' ) : string {

        $template_path = locate_template( 'templates/components/' . $template . '.php', false, false );

        if ( empty( $template_path ) ) {
            return false;
        }

        return $template_path;
    }

    private function create_class_list( array $custom_classes = [], array $default_classes = [] ) : string {

        $classes = implode( ' ', array_merge( $custom_classes, $default_classes ) );

        return $classes;
    }

    public function generate_logo( string $logo_url = '', string $width = '' ) : string {
        return $logo_url ? "<img src=\"$logo_url\" />" : get_bloginfo();
    }

    private function query_posts( array $query = [] ) : \WP_query {
 
        $post_type = $query['post_type'] ?? '';

        if ( empty( $post_type ) ) {
            return null;
        }

        return new \WP_Query( $query );
    }

    private function get_content_from_source( array $query = [] ) : array {
        
        $prepared_content = [];

        if ( ! $query ) {
            return [];
        }

        // Filter default values.
        $query = wp_parse_args( $query, [
            'post_type'   => 'page',
            'query_by'    => 'slug',
            'query_value' => 'sample-page'
        ]);

        extract( $query );

        if ( 'slug' === $query_by ) {
            $content = get_page_by_path( $query_value, ARRAY_A, $post_type );
        }

        // Parse the data.
        if ( $content ) {

            $prepared_content = [
                'headline' => $content['post_title'],
                'content'  => $content['post_content'],
            ];
        }

        return $prepared_content;
    }
}

Framer::register();

class Framer_Menu {

    public static function register() {

        $plugin = new self();

        add_action( 'init', [ $plugin, 'register_menus' ] );
    }

    public function register_menus() {
        register_nav_menus(
            [
                'header-main-menu'      => __( 'Header Main' ),
                'header-secondary-menu' => __( 'Header Secondary' ),
                'footer-main-menu'      => __( 'Footer Main' ),
                'footer-secondary-menu' => __( 'Footer Secondary' ),
            ]
        );
    }
}

Framer_Menu::register();