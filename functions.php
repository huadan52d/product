<?php

require_once('wp-bootstrap-navwalker.php');

register_nav_menus(array(
    'primary' => __('Primary Menu')
));

add_theme_support('post-thumbnails');
add_theme_support('menus');

?>