<?php 
//image
function images($image){
    echo get_template_directory_uri().'/image/'.$image;
}
//general setup
function jc_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','jc_setup');
//adding css
function jc_scripts(){
    //adding open sans
    wp_enqueue_style('opensans','https://fonts.googleapis.com/css?family=Roboto:300,400,600,700');
    //adding bootstrap
    wp_enqueue_style('bootstrapcss',get_template_directory_uri().'/css/bootstrap.min.css');
    //adding general style sheet
    wp_enqueue_style('general-css',get_stylesheet_uri());
    //adding mediaquery
    wp_enqueue_style('mediaquery',get_template_directory_uri().'/css/mediaquery.css');
    
    //adding bootstrap js
    wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts','jc_scripts');
//print metabox
function print_meta($metaname){
	global $post;
	echo get_post_meta($post->ID,$metaname, true);
}
//get metabox value
function get_meta($metaname){
	global $post;
	return get_post_meta($post->ID,$metaname, true);
	}
//get image feature post value
function feature_img_url($postid, $imagesize) {
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($postid), $imagesize);
    $url = $thumb['0'];
    return $url;
}
/* ---------------------------
Adding customize register
----------------------------- */
function basetheme_customizer($wp_customize){
  //adding color groups
  $colors = array();
  $colors[] = array(
    'slug'=>'header_background',
    'default' => '#333',
    'label' => __('Header Background', 'basetheme')
  );
  $colors[] = array(
    'slug'=>'header_link',
    'default' => '#88C34B',
    'label' => __('Header Link Color', 'basetheme')
  );
  foreach( $colors as $color ) {
    // SETTINGS
    $wp_customize->add_setting(
      $color['slug'], array(
        'default' => $color['default'],
        'type' => 'option',
        'capability' =>
        'edit_theme_options'
      )
    );
    // CONTROLS
    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize,
        $color['slug'],
        array('label' => $color['label'],
        'section' => 'colors',
        'settings' => $color['slug'])
      )
    );
  }


  //adding advanced option
  $wp_customize->add_section(
    'base_advanced_options',
    array(
        'title'     => 'Header Logo',
        'priority'  => 1
    )
);
$wp_customize->add_setting(
    'base_background_image',
    array(
        'default'      => '',
        'type' =>'option',
        'transport'    => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'base_background_image',
        array(
            'label'    => 'Background Image',
            'settings' => 'base_background_image',
            'section'  => 'base_advanced_options'
        )
    )
);

}
add_action('customize_register','basetheme_customizer');
