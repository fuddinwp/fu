<?php 
 //nama doang
function load_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'load_resources' );


//--------------------------------------khusus excerpt ----
//atur panjang excerpt (berapa kata)
function get_panjang_excerpt(){
	return 5;
}

//hapus [..]
function fix_excerpt_more(){
	return '';
}

add_filter('excerpt_more', 'fix_excerpt_more');
add_filter('excerpt_length', 'get_panjang_excerpt');
//-------------------------------------- end khusus excerpt ----

//fungsi umum kalo mau ada support tambahan, nama bebas
//menu juga masukin, biar lebih rapi
function init_setup(){
	//daftarin di WP, biar WP tahu
	register_nav_menus(array(
			'footer_menu' => __( 'Footer Menu' ),
			'main_menu'		 => __( 'Main Menu' )
	));


		//add theme supports
		add_theme_support('post-thumbnails');
		//tambahan buat various size -> parameter ke 4:CROP
		add_image_size('small_thumb', 180, 180, true);
		add_image_size('big_thumb', 300, 180, array('left','top')); //buat single.php
		  //kalo mau bagian tertentu -> true ganti array('left','top')

		//add post format support, param@2 yang mana yang mau disupport
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'init_setup');

//add-register widget location
function widget_setup(){
	register_sidebar(array(
		'name' => 'Sidebar One',
		'id'   => 'sidebar1'
	));

	register_sidebar(array(
		'name' => 'Sidebar kedua',
		'id'   => 'sidebar2'
	));
}

add_action('widgets_init', 'widget_setup');

?>