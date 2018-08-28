<?php

require get_template_directory() . '/functions/bootstrap-navwalker.php';

register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );