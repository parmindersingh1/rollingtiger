<?php

$pages_list = get_pages();
$wppages = array();
$wppages[''] = "Choose a page";
foreach($pages_list as $apage) {
	$wppages[$apage->ID] = $apage->post_title;
}



$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 array( "name" => __("Blog Options"),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Show full post contents", THEME_SLUG ),
	"desc" => __("Check It, If you want to show full contents of posts on category/search/tags pages, else excerpts is shown.", THEME_SLUG ),
	"id" => $shortname."_blog_excerpt_disable",
	"type" => "checkbox",
	"std" => ""),
	
array( "name" => __("Show Thumbnail Image ", THEME_SLUG ),
	"desc" => __("Check it, if you want to show thumbnail image on blog page.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_thumbnail",
	"type" => "checkbox",
	"std" => "true"),

array( "name" => __("Show Meta", THEME_SLUG ),
	"desc" => __("Check it, if you want to show meta information ie categories, date, comments etc.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_show_meta",
	"type" => "checkbox",
	"std" => "true"),
array( "name" => __("Show Author", THEME_SLUG ),
	"desc" => __("Check it, if you want to show author name on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_author",
	"type" => "checkbox",
	"std" => "true"),

array( "name" => __("Show Publish Date", THEME_SLUG ),
	"desc" => __("Check it, if you want to show publish date on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_date",
	"type" => "checkbox",
	"std" => "true"),
	
array( "name" => __("Show categories Name", THEME_SLUG ),
	"desc" => __("Check it, if you want to show categories name on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_cat",
	"type" => "checkbox",
	"std" => "true"),

array( "name" => __("Categories Caption", THEME_SLUG ),
	"desc" => __("Category caption.(i.e Posted In, Category etc)", THEME_SLUG ),
	"id" => $shortname."_blog_cat_caption",
	"type" => "text",
	"std" => "Posted In"),

array( "name" => __("Read More Text", THEME_SLUG ),
	"desc" => __("Read More Text.(i.e Read More, Continue... etc)", THEME_SLUG ),
	"id" => $shortname."_blog_readmore_text",
	"type" => "text",
	"std" => "Read More"),

array( "name" => __("Show comments count", THEME_SLUG ),
	"desc" => __("Check it, if you want to show comments on meta bar.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_commentcount",
	"type" => "checkbox",
	"std" => ""),

array( "name" => __("Show Tags", THEME_SLUG ),
	"desc" => __("Check it, if you want to show tags on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_cat_tags",
	"type" => "checkbox",
	"std" => ""),


array( "type" => "close"),

array( "name" => __("Single Post Settings", THEME_SLUG ),
	"type" => "section"),
array( "type" => "open"),
 

array( "name" => __("Show Author", THEME_SLUG ),
	"desc" => __("Check it, if you want to show author name on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_single_author",
	"type" => "checkbox",
	"std" => ""),

array( "name" => __("Show Publish Date", THEME_SLUG ),
	"desc" => __("Check it, if you want to show publish date on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_single_date",
	"type" => "checkbox",
	"std" => ""),
	
array( "name" => __("Show categories Name", THEME_SLUG ),
	"desc" => __("Check it, if you want to show categories name on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_single_cat",
	"type" => "checkbox",
	"std" => ""),

array( "name" => __("Show Tags", THEME_SLUG ),
	"desc" => __("Check it, if you want to show tags on blog posts.", THEME_SLUG ),
	"id" => $shortname."_blog_single_tags",
	"type" => "checkbox",
	"std" => ""),
	
array( "name" => __("Show Previous/Next post link on Top", THEME_SLUG ),
	"desc" => __("Check it, if you want to show Previous/Next post link on Top.", THEME_SLUG ),
	"id" => $shortname."_blog_single_prev_link_top",
	"type" => "checkbox",
	"std" => ""),
	
array( "name" => __("Show Previous/Next post link on Bottom", THEME_SLUG ),
	"desc" => __("Check it, if you want to show Previous/Next post link on Bottom.", THEME_SLUG ),
	"id" => $shortname."_blog_single_next_link_top",
	"type" => "checkbox",
	"std" => ""),

array( "name" => __("Disable comments on posts", THEME_SLUG ),
	"desc" => __("Check it, if you don't want visitors to submit comments.", THEME_SLUG ),
	"id" => $shortname."_blog_single_commentdisable",
	"type" => "checkbox",
	"std" => ""),
	
array( "type" => "close")
 
);


?>