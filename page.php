<?php
/**
 * Template Name: Page w/ Right Sidebar
 */

get_header();

Framer::_header();

Framer::_breadcrumb();

Framer::_content( 'page' );

Framer::_footer();

get_footer();