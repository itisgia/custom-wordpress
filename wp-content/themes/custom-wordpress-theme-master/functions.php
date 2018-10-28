<?php
/*
    This file holds all the functionality of our theme.
    It will be different on every theme you create.
*/

/*
    What we are doing bellow is adding our bootstrap styles into our theme.
    We can't do it the normal way which we have done in the past, but rather add it into the wp_head or wp_footer sections

    Whenever we work in the functions.php file, we need to create a function to tell it what to do
    and then tell wordpress what loading que do you want that function to be a part of.
    This one bellow is adding in our css and js into the scripts que which gets loaded when the page loads
*/
function addCustomThemeStyles(){
    // Style
    // if there is any dependencies array()
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', array() );

    // Scripts

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '0.0.1', true );
}

// function register_my_menus() {
//   register_nav_menus(
//     array(
//       'header-menu' => __( 'Header Menu' ),
//       'extra-menu' => __( 'Extra Menu' )
//     )
//   );
// }
// add_action( 'init', 'register_my_menus' );

add_action('wp_enqueue_scripts', 'addCustomThemeStyles');

//https://codex.wordpress.org/Post_Thumbnails
//enabling the ability to have featured images on pages/posts
// if you upload image, the image will be inside the upload folder. goion to crop images into 5 different ones based on original image.
//by Default. the image will not be on the post. We need to tell where to go.
add_theme_support( 'post-thumbnails' );

// add_image_size('icon' ,100, 100, true); // custom image size


function addCustomMenus(){
    add_theme_support('menu');
    //give us a ability to make a Menu
    register_nav_menu('header_nav', 'This is the navigiaton which appears at the top of the page');
    register_nav_menu('footer_nav', 'This is the footer which appears at the bottom of the page');
}
add_action('init', 'addCustomMenus');
