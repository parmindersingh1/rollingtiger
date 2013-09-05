<?php
    // Add the banner_menu Custom Post Type
    include("functions/mytheme-post-types.php");

?>


<?php
/*-----------------------------------------------------------------------------------*/
/* Start Templuto Functions - Please do not change the code */
/*-----------------------------------------------------------------------------------*/

// Path to TemplutoFramework and theme specific functions
$includes_path = TEMPLATEPATH . '/lib/';
$templuto_path=get_bloginfo('template_url');
define('TEMPLUTO_PATH', TEMPLATEPATH);
define('TEMPLUTO_URI',  get_template_directory_uri() );
define('TEMPLUTO_LIB',  TEMPLUTO_PATH  . '/lib');
define('TEMPLUTO_CLASSES', TEMPLUTO_LIB . '/classes');
define('TEMPLUTO_INC', TEMPLUTO_LIB . '/includes');
define('TEMPLUTO_ADMIN', TEMPLUTO_LIB . '/admin');
define('TEMPLUTO_SCRIPTS', TEMPLUTO_URI . '/lib/scripts' );
define('TEMPLUTO_FONTS', TEMPLUTO_URI . '/fonts' );
define('TEMPLUTO_CSS',  TEMPLUTO_URI . '/lib/css');
define('TEMPLUTO_OPTIONS', TEMPLUTO_LIB . '/options');
define('TEMPLUTO_IMAGES', TEMPLUTO_URI . '/lib/images');
define('TEMPLUTO_THUMB',TEMPLUTO_URI . '/lib/classes/thumb.php' );


define('TEMPLUTO_INCLUDES', $templuto_path . '/lib/includes');

define('DEF_SHOW_BLOG_DATE','true' );
define('DEF_SHOW_BLOG_AUTHOR','' );
define('DEF_SHOW_BLOG_CATEGORIES','true' );
define('DEF_SHOW_BLOG_COMMENTCOUNT','true' );
define('DEF_SHOW_BLOG_TAGS','true' );
define('DEF_BLOG_EXCERPT_DISABLE','true');
define('DEF_SLIDER_CYCLE_WIDTH','960');
define('DEF_SLIDER_CYCLE_HEIGHT','480');
define('THUMB_WIDTH',300 );
define('THUMB_HEIGHT',200 );

require_once ($includes_path . 'includes/settings.php'); 	
require_once ($includes_path . 'includes/theme-functions.php'); 	
require_once ($includes_path . 'includes/theme-comments.php'); 	
require_once(TEMPLUTO_CLASSES . '/tpo_core.php');
require_once ($includes_path . 'includes/slider.php'); 	
require_once ($includes_path . 'includes/meta-box.php'); 	
require_once(TEMPLUTO_CLASSES . '/tpo_slide_show.php');



add_theme_support( 'menus' );

add_theme_support('post-thumbnails');

function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length) {
	return 200;
}
add_filter('excerpt_length', 'new_excerpt_length', 999);

function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

function tpo_tag_cloud_filter($args = array()) {
   $args['smallest'] = 8;
   $args['largest'] = 16;
   $args['unit'] = 'pt';
   return $args;
}

add_filter('widget_tag_cloud_args', 'tpo_tag_cloud_filter', 90);
$locale_lang = get_locale();
	
  	global $hook;
  
    $hook->add_hook('sidebar_right', 'sidebar_right_widgets');
    
    function sidebar_right_widgets ()
    {
		tpo_widget('Social', array('facebook'=> 'http://wwww.facebook.com', 'twitter'=> 'http://wwww.twitter.com' , 'technorati' => '' ));
        tpo_widget('RecentPosts', array('num'=> 5, ));
		tpo_widget('Categories');
		tpo_widget('Calendar', array('title'=> 'Calendar'));
		tpo_widget('Tag_Cloud');
		tpo_widget('Text', array('text' => '<div style="text-align:center;"><a href="http://www.zebrathemes.com" target="_blank"><img src="http://www.zebrathemes.com/images/zebra-250X250.jpg" alt="Free WordPress Themes" title="Free WordPress Themes" /></a></div>'));
	}

	
        $hook->add_hook('first-footer-widget-area', 'footer_first_default_widgets');
        $hook->add_hook('second-footer-widget-area', 'footer_second_default_widgets');
        $hook->add_hook('third-footer-widget-area', 'footer_third_default_widgets');
		
        function footer_first_default_widgets ()
        {
            tpo_widget('Links');
        }
        
        function footer_second_default_widgets ()
        {
			tpo_widget('Search');
            tpo_widget('Tag_Cloud');
        }
        
        function footer_third_default_widgets ()
        {
            tpo_widget('Text', array('title' => 'Contact', 'text' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras id elit. Integer quis urna. Ut ante enim, dapibus malesuada, fringilla eu, condimentum quis, tellus. Aenean porttitor eros vel dolor.<br /><br /> <span style="font-weight: bold;">WordPress Themes Inc.</span><br />12 Street Address<br />City Pincode<br />Phone: 111-222-3333<br />Fax: 111-222-4444'));
        }
?>
