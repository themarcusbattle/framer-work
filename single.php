<?php

get_header();

Framer::_header();

Framer::_breadcrumb();

Framer::_content( get_post_type() );

Framer::_footer();

get_footer();