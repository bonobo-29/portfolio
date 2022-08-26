<?php 
function wpb_adding_scripts(){

  wp_register_script( 'load', get_template_directory_uri() .'/gsap/load.js', array('gsap'), '1.0', true );
	
	wp_register_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), '1.0', true );

  wp_register_script( 'gsap-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array(), '1.0', true );
  
	wp_register_script( 'gsap-settings', get_template_directory_uri() .'/gsap/common.js', array('gsap'), '1.0', true );

  wp_enqueue_script('load');
	wp_enqueue_script('gsap');
  wp_enqueue_script('gsap-scroll');
	wp_enqueue_script('gsap-settings');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
//////////////////////////////////////////////////
//canonical付与
//////////////////////////////////////////////////
add_action( 'wp_head', 'add_canonical' );
function add_canonical() {
  $canonical = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

  echo '<link rel="canonical" href="https://'.$canonical.'">'."\n";
}

//////////////////////////////////////////////////
//デフォルトのファビコンを削除
//////////////////////////////////////////////////
add_action( 'do_faviconico', 'wp_favicon_remover');
function wp_favicon_remover() {
    exit;
}

// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');

//////////////////////////////////////////////////
//wp_headで自動に記述されるcanonicalを削除
//////////////////////////////////////////////////
remove_action('wp_head', 'rel_canonical');
?>
