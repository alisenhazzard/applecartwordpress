<?php
//Load the Theme CSS
function theme_styles() {
	wp_enqueue_style('style2', get_template_directory_uri() . '/css/style.scss');
	wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css');

}

//Load the Theme JS
function theme_js() {
	wp_enqueue_scripts( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
}


add_action('wp_enqueue_scripts', 'theme_styles');

//Enable custom menus
add_theme_support( 'menus');

function creat_widget( $name, $id, $description ) {	
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>' 
	); 

	register_sidebar( $args );
}

creat_widget( 'Left Footer', 'footer_left', 'Displays in the bottom left footer');
creat_widget( 'Middle Footer', 'footer_middle', 'Displays in the bottom middle footer');
creat_widget( 'Right Footer', 'footer_right', 'Displays in the bottom right footer');

?>