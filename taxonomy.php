<?php

get_header();

Framer::_header();

Framer::_hero( 'subpage', [
    'headline' => get_queried_object()->name,
    'subtitle' => get_queried_object()->description,
] );

Framer::_content();

Framer::_footer();

get_footer();