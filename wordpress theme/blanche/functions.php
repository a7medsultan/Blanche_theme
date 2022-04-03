<?php
if ( ! function_exists( 'blanche_setup' ) ) :

function blanche_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'blanche', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'blanche' ),
        'social'  => __( 'Social Links Menu', 'blanche' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // blanche_setup

add_action( 'after_setup_theme', 'blanche_setup' );


if ( ! function_exists( 'blanche_init' ) ) :

function blanche_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // blanche_setup

add_action( 'init', 'blanche_init' );


if ( ! function_exists( 'blanche_custom_image_sizes_names' ) ) :

function blanche_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'blanche_custom_image_sizes_names' );
endif;// blanche_custom_image_sizes_names



if ( ! function_exists( 'blanche_widgets_init' ) ) :

function blanche_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'blanche_widgets_init' );
endif;// blanche_widgets_init



if ( ! function_exists( 'blanche_customize_register' ) ) :

function blanche_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'header', array(
        'title' => __( 'Header', 'blanche' )
    ));

    $wp_customize->add_section( 'slider', array(
        'title' => __( 'Slider Section', 'blanche' )
    ));

    $wp_customize->add_section( 'explore', array(
        'title' => __( 'Explore Section', 'blanche' )
    ));

    $wp_customize->add_section( 'bs', array(
        'title' => __( 'Best Sellers Section', 'blanche' )
    ));

    $wp_customize->add_section( 'features', array(
        'title' => __( 'Feartures Section', 'blanche' )
    ));

    $wp_customize->add_section( 'testemonial', array(
        'title' => __( 'Testemonial Section', 'blanche' )
    ));

    $wp_customize->add_section( 'socialmedia', array(
        'title' => __( 'Social Media Section', 'blanche' )
    ));

    $wp_customize->add_section( 'story', array(
        'title' => __( 'Story', 'blanche' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'header_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'header_logo', array(
        'label' => __( 'Logo', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'header'
    ) ) );

    $wp_customize->add_setting( 'slider_slide1_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'slider_slide1_img', array(
        'label' => __( 'Slider Image', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'slider'
    ) ) );

    $wp_customize->add_setting( 'slider_caption1', array(
        'type' => 'theme_mod',
        'default' => __( 'Super Soft, Stylish Bed Linen Made With Love', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'slider_caption1', array(
        'label' => __( 'Caption 1', 'blanche' ),
        'type' => 'text',
        'section' => 'slider'
    ));

    $wp_customize->add_setting( 'slider_slide2_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'slider_slide2_img', array(
        'label' => __( 'Slide 2 Image', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'slider'
    ) ) );

    $wp_customize->add_setting( 'slider_caption2', array(
        'type' => 'theme_mod',
        'default' => __( 'Super Soft, Stylish Bed Linen Made With Love', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'slider_caption2', array(
        'label' => __( 'Caption 2', 'blanche' ),
        'type' => 'text',
        'section' => 'slider'
    ));

    $wp_customize->add_setting( 'explore_intro', array(
        'type' => 'theme_mod',
        'default' => __( 'Our premiume products got the finest quality cotton that creates an exquisite lightweight textile that\'s soft and crisp - guaranteed to give you a wonderful night\'s sleep.', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_intro', array(
        'label' => __( 'Intro', 'blanche' ),
        'type' => 'text',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'explore_img1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'explore_img1', array(
        'label' => __( 'Image1', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'explore'
    ) ) );

    $wp_customize->add_setting( 'explore_btn_label1', array(
        'type' => 'theme_mod',
        'default' => __( 'Bed Linens', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_btn_label1', array(
        'label' => __( 'Button Lable 1', 'blanche' ),
        'type' => 'text',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'explore_btn_link1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_btn_link1', array(
        'label' => __( 'Button Link 1', 'blanche' ),
        'type' => 'url',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'explore_img2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'explore_img2', array(
        'label' => __( 'Image 2', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'explore'
    ) ) );

    $wp_customize->add_setting( 'explore_btn_label2', array(
        'type' => 'theme_mod',
        'default' => __( 'Shop Bath Towels', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_btn_label2', array(
        'label' => __( 'Button Lable2', 'blanche' ),
        'type' => 'text',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'explore_btn_link2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_btn_link2', array(
        'label' => __( 'Button Link 2', 'blanche' ),
        'type' => 'url',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'explore_img3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'explore_img3', array(
        'label' => __( 'Image 3', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'explore'
    ) ) );

    $wp_customize->add_setting( 'explore_btn_label3', array(
        'type' => 'theme_mod',
        'default' => __( 'Shop Bath Robes', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_btn_label3', array(
        'label' => __( 'Button Lable 3', 'blanche' ),
        'type' => 'text',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'explore_btn_link3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_btn_link3', array(
        'label' => __( 'Button Link 3', 'blanche' ),
        'type' => 'text',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'explore_img4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'explore_img4', array(
        'label' => __( 'Image 4', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'explore'
    ) ) );

    $wp_customize->add_setting( 'explore_btn_label4', array(
        'type' => 'theme_mod',
        'default' => __( 'Shop Home Fragrances', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_btn_label4', array(
        'label' => __( 'Button Lable 4', 'blanche' ),
        'type' => 'text',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'explore_btn_link4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'explore_btn_link4', array(
        'label' => __( 'Button Link 4', 'blanche' ),
        'type' => 'url',
        'section' => 'explore'
    ));

    $wp_customize->add_setting( 'bs_pimage1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'bs_pimage1', array(
        'label' => __( 'Product Image 1', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bs'
    ) ) );

    $wp_customize->add_setting( 'bs_pname1', array(
        'type' => 'theme_mod',
        'default' => __( 'Product Name', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'bs_pname1', array(
        'label' => __( 'Product Name 1', 'blanche' ),
        'type' => 'text',
        'section' => 'bs'
    ));

    $wp_customize->add_setting( 'bs_pprice1', array(
        'type' => 'theme_mod',
        'default' => __( 'AED XXX', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'bs_pprice1', array(
        'label' => __( 'Product Price 1', 'blanche' ),
        'type' => 'text',
        'section' => 'bs'
    ));

    $wp_customize->add_setting( 'bs_pimage2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'bs_pimage2', array(
        'label' => __( 'Product Image 2', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bs'
    ) ) );

    $wp_customize->add_setting( 'bs_pname2', array(
        'type' => 'theme_mod',
        'default' => __( 'Product Name', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'bs_pname2', array(
        'label' => __( 'Product Name 2', 'blanche' ),
        'type' => 'text',
        'section' => 'bs'
    ));

    $wp_customize->add_setting( 'bs_pprice2', array(
        'type' => 'theme_mod',
        'default' => __( 'AED XXX', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'bs_pprice2', array(
        'label' => __( 'Product Price 2', 'blanche' ),
        'type' => 'text',
        'section' => 'bs'
    ));

    $wp_customize->add_setting( 'bs_pimage3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'bs_pimage3', array(
        'label' => __( 'Product Image 3', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bs'
    ) ) );

    $wp_customize->add_setting( 'bs_pname3', array(
        'type' => 'theme_mod',
        'default' => __( 'Product Name', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'bs_pname3', array(
        'label' => __( 'Product Name 3', 'blanche' ),
        'type' => 'text',
        'section' => 'bs'
    ));

    $wp_customize->add_setting( 'bs_pprice3', array(
        'type' => 'theme_mod',
        'default' => __( 'AED XXX', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'bs_pprice3', array(
        'label' => __( 'Product Price 3', 'blanche' ),
        'type' => 'text',
        'section' => 'bs'
    ));

    $wp_customize->add_setting( 'section_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Your Comfort Is Our #1 Priority', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'section_title', array(
        'label' => __( 'Section Title', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'fimg_1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fimg_1', array(
        'label' => __( 'Feature Image 1', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'features'
    ) ) );

    $wp_customize->add_setting( 'fname1', array(
        'type' => 'theme_mod',
        'default' => __( 'Quality Product', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'fname1', array(
        'label' => __( 'Feature Name 1', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'fdesc1', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, tenetur?', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'fdesc1', array(
        'label' => __( 'Feature Description 1', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'fimg_2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fimg_2', array(
        'label' => __( 'Feature Image 2', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'features'
    ) ) );

    $wp_customize->add_setting( 'fname2', array(
        'type' => 'theme_mod',
        'default' => __( 'Quality Product', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'fname2', array(
        'label' => __( 'Feature Name 2', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'fdesc2', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, tenetur?', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'fdesc2', array(
        'label' => __( 'Feature Description 2', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'fimg_3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fimg_3', array(
        'label' => __( 'Feature Image 3', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'features'
    ) ) );

    $wp_customize->add_setting( 'fname3', array(
        'type' => 'theme_mod',
        'default' => __( 'Quality Product', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'fname3', array(
        'label' => __( 'Feature Name 3', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'fdesc3', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, tenetur?', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'fdesc3', array(
        'label' => __( 'Feature Description 3', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'fimg_4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fimg_4', array(
        'label' => __( 'Feature Image 4', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'features'
    ) ) );

    $wp_customize->add_setting( 'fname4', array(
        'type' => 'theme_mod',
        'default' => __( 'Quality Product', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'fname4', array(
        'label' => __( 'Feature Name 4', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'fdesc4', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, tenetur?', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'fdesc4', array(
        'label' => __( 'Feature Desciption 4', 'blanche' ),
        'type' => 'text',
        'section' => 'features'
    ));

    $wp_customize->add_setting( 'testemonial', array(
        'type' => 'theme_mod',
        'default' => __( '"This is the best towel set I\'ve ever had; it\'s cool, comfortable and aesthetically perfect."', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'testemonial', array(
        'label' => __( 'Testemonial', 'blanche' ),
        'type' => 'text',
        'section' => 'testemonial'
    ));

    $wp_customize->add_setting( 'testem_auther', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'testem_auther', array(
        'label' => __( 'Auther', 'blanche' ),
        'type' => 'text',
        'section' => 'testemonial'
    ));

    $wp_customize->add_setting( 'testem_btn', array(
        'type' => 'theme_mod',
        'default' => __( 'READ TESTEMONIALS', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'testem_btn', array(
        'label' => __( 'Button Lable', 'blanche' ),
        'type' => 'text',
        'section' => 'testemonial'
    ));

    $wp_customize->add_setting( 'testem_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'testem_link', array(
        'label' => __( 'Link', 'blanche' ),
        'type' => 'url',
        'section' => 'testemonial'
    ));

    $wp_customize->add_setting( 'social_title', array(
        'type' => 'theme_mod',
        'default' => 'FOLLOW US <i class="bi bi-instagram"></i>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'social_title', array(
        'label' => __( 'Social Media Title', 'blanche' ),
        'type' => 'text',
        'section' => 'socialmedia'
    ));

    $wp_customize->add_setting( 'sm_img1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'sm_img1', array(
        'label' => __( 'Image 1', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'socialmedia'
    ) ) );

    $wp_customize->add_setting( 'sm_img2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'sm_img2', array(
        'label' => __( 'Image 2', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'socialmedia'
    ) ) );

    $wp_customize->add_setting( 'sm_img3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'sm_img3', array(
        'label' => __( 'Image 3', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'socialmedia'
    ) ) );

    $wp_customize->add_setting( 'sm_img4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'sm_img4', array(
        'label' => __( 'Image 4', 'blanche' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'socialmedia'
    ) ) );

    $wp_customize->add_setting( 'story_title', array(
        'type' => 'theme_mod',
        'default' => __( 'OUR STORY', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'story_title', array(
        'label' => __( 'Story Title', 'blanche' ),
        'type' => 'text',
        'section' => 'story'
    ));

    $wp_customize->add_setting( 'story_summery', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem est aperiam, officia cupiditate expedita aspernatur.', 'blanche' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'story_summery', array(
        'label' => __( 'Story Summery', 'blanche' ),
        'type' => 'text',
        'section' => 'story'
    ));

    $wp_customize->add_setting( 'instagram_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'instagram_link', array(
        'label' => __( 'Instagram Link', 'blanche' ),
        'type' => 'url',
        'section' => 'story'
    ));

    $wp_customize->add_setting( 'twitterlink', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'twitterlink', array(
        'label' => __( 'Twitter Link', 'blanche' ),
        'type' => 'url',
        'section' => 'story'
    ));

    $wp_customize->add_setting( 'facebook_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'facebook_link', array(
        'label' => __( 'Facebook Link', 'blanche' ),
        'type' => 'url',
        'section' => 'story'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'blanche_customize_register' );
endif;// blanche_customize_register


if ( ! function_exists( 'blanche_enqueue_scripts' ) ) :
    function blanche_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'bootstrapbundle' );
    wp_enqueue_script( 'bootstrapbundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', false, null, false);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'ioniconsesm' );
    wp_enqueue_script( 'ioniconsesm', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js', false, null, true);

    wp_deregister_script( 'ionicons' );
    wp_enqueue_script( 'ionicons', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', false, null, true);

    wp_deregister_script( 'aos' );
    wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false, null, true);

    wp_register_script( 'inline-script-1', '', [], '', true );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'AOS.init();

        //----------------------------------------------
        var container = document.querySelector(\'#search_section\')
        var button = document.querySelector(\'#search_btn\')

        button.addEventListener(\'click\', () => {
            /** Slide down. */
            if (!container.classList.contains(\'active\')) {
                /** Show the container. */
                container.classList.add(\'active\')
                container.style.height = "auto"

                /** Get the computed height of the container. */
                var height = container.clientHeight + "px"

                /** Set the height of the content as 0px, */
                /** so we can trigger the slide down animation. */
                container.style.height = "0px"

                /** Do this after the 0px has applied. */
                /** It\'s like a delay or something. MAGIC! */
                setTimeout(() => {
                    container.style.height = height
                }, 0)

                /** Slide up. */
            } else {
                /** Set the height as 0px to trigger the slide up animation. */
                container.style.height = "0px"

                /** Remove the `active` class when the animation ends. */
                container.addEventListener(\'transitionend\', () => {
                    container.classList.remove(\'active\')
                }, { once: true })
            }
        })');

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', false, null, 'all');

    wp_deregister_style( 'bootstrapicons' );
    wp_enqueue_style( 'bootstrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css', false, null, 'all');

    wp_deregister_style( 'icofont' );
    wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/icofont/icofont.min.css', false, null, 'all');

    wp_deregister_style( 'aos' );
    wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'blanche_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>