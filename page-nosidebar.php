<?php
/**
 * Template Name: Page w/o Sidebar
 */

get_header();

Framer::_header();

Framer::_breadcrumb();

Framer::_content( 'page-no-sidebar' );

Framer::_footer();

get_footer();