<?php

function theme_setup() {
   
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'Main_Menu'=>'منو اصلی',
        'Footer_Menu'=>'منو فوتر',
    ));
}

add_action("after_setup_theme","theme_setup");

function theme_style(){
    wp_enqueue_style('animate' , get_template_directory_uri().'/lib/animate/animate.min.css' , [] , '4.0.0');
    wp_enqueue_style('owlcarousel' , get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css' , [] , '2.3.4');
    wp_enqueue_style('bootstrap' , get_template_directory_uri().'/css/bootstrap.min.css' , [] , '5.0.0');
    wp_enqueue_style('style' , get_template_directory_uri().'/css/style.css' , [] , '1.0.1');
    
    
}

add_action("wp_enqueue_scripts" , "theme_style");


function theme_widgets(){
    register_sidebar( array(
      'id' => 'fdesc' ,
      'name' => 'ابزارک فوتر ',
      'before_widget' => "<div class='position-relative w-100'>",
      'after_widget' => "</div>",
      'before_title' => "<h4 class='text-primary mb-4'>",
      'after_title' => "</h4>",
    ) );

    register_sidebar( array(
        
        'id' => 'fcontact' ,
        'name' => 'اطلاعات تماس ',
        'before_widget' => "<div class='position-relative w-100'>",
        'after_widget' => "</div>",
        'before_title' => "<h4 class='text-primary mb-4'></h4>",
        'after_title' => "</h4>",
      ) );
      
}


add_action("widgets_init", "theme_widgets");