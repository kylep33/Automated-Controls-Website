
<?php


add_action( 'wp_enqueue_scripts', 'hubspot_blog_theme_enqueue_styles' );


function hubspot_blog_theme_enqueue_styles() {


wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/style.css' );


}


?>

