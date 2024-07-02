<?php
register_nav_menu("nav-menu", 'navigation-menu');


add_theme_support('custom-header');
add_theme_support('custom-footer');
add_theme_support('post-thumbnails');
register_sidebar(array('name'=>'sidebar location','id'=>'sidebar'));
add_theme_support('custom-background');
?>
