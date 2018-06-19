<?php 
function zboom_rashad_theme(){
    
    add_theme_support('title-tag');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    load_theme_textdomain('zboom',get_template_directory_uri().'/languages');
    
    if(function_exists('register_nav_menu')){
    register_nav_menus(array(
        'primarymenu'=>__('Primary Menu','zboom'),
        'footermenu'=>__('Footer Menu','zboom')
));
}
   register_post_type('zboomslider',array(
       'labels'=>array(
       'name'=>'Sliders',
       'add_new_item'=>'Add New Slider'
       ),
       'public'=>true,
       'supports'=>array(
       'title','editor','thumbnail')
   
   )); 
    
    
    register_post_type('zboomservices',array(
        'labels'=>array(
        'name'=>'Blocks',
        'add_new_item'=>__('Add New Block','zboom')
        ),
        'public'=>true,
        'supports'=>array(
        'title','editor')
    ));
}
add_action('after_setup_theme','zboom_rashad_theme');

function zboom_right_sidebar(){
    register_sidebar(array(
    'name'=>__('Right Sidebar','zboom'),
    'Descripption'=>__('Add your widget here','zboom'),
    'id'=>'right-sidebar',
    'before_widget'=>'<div class="box">',
    'after_widget'=>'</div></div>',
    'before_title'=>'<div class="heading"><h2> ',
    'after_title'=>'</h2></div><div class="content">'
    ));

    
    register_sidebar(array(
    'name'=>__('Footer Widget','zboom'),
    'Descripption'=>__('Add your footer widget here','zboom'),
    'id'=>'footer-widget',
    'before_widget'=>'<div class="col-1-4"><div class="wrap-col"><div class="box">',
    'after_widget'=>'</div></div></div></div>',
    'before_title'=>'<div class="heading"><h2>',
    'after_title'=>'</h2></div><div class="content">'
    ));
}
add_action('widgets_init','zboom_right_sidebar');

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

?>