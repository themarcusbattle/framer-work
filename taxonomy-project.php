<?php

get_header();

Framer::_header();

Framer::_hero( 'subpage', [
    'headline'           => get_queried_object()->name,
    'subtitle'           => get_queried_object()->description,
    'background_img_url' => get_term_meta( get_queried_object()->term_id, 'background_img_url', true ),
] );

Framer::_content();

Framer::_footer();

get_footer();