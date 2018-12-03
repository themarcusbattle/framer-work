<?php

get_header();

Framer::_hero( 'standard', [
    'headline' => get_bloginfo(),
    'subtitle' => get_bloginfo( 'description' ),
]);

Framer::_footer();

get_footer();