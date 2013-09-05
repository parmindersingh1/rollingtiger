<?php
/**
 * @package WordPress
 * @subpackage Templuto
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<?php if (TPO_FAVICON) { ?>
<link rel="shortcut icon" href="<?php echo TPO_FAVICON; ?>" type="image/x-icon" />
<?php } ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_enqueue_script("jquery"); ?>
<link rel='stylesheet' id='nivo_css-css'  href='<?php bloginfo('template_url'); ?>/css/nivoslider.css' type='text/css'  media='all' />
<link rel='stylesheet' id='nivo_css-css'  href='<?php bloginfo('template_url'); ?>/css/jquery.jcarousel.css' type='text/css'  media='all' />

<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
  
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

</head>
<body>

 <div id="container">
	<div id="main">
  			<div id="header">
					
					 <?php 
					 	
					 	if ( get_option('tpo_enablelogotext') == true ) {
							$logo = '<h1>' . get_option('tpo_logotext') .'</h1>' ;	
						} else {
							if ( get_option('tpo_logo') == '' ) { 
								$logo = get_bloginfo('template_url') . "/images/logo.png";
							} else {
								$logo = get_option('tpo_logo');
							}
							$logo ='<img src="' . $logo . '"/>';
						}
					 ?>
				
                    <div id="logo"><a href="<?php bloginfo('url'); ?>"><?php echo $logo ?></a></div><div id="tagline"><?php echo get_option('tpo_tagline') ?></div>
					<?php show_search(); ?> 
            </div>
			
			
 					
			<div id="menu_outer">
					<?php tpo_show_nav();    ?>
  			</div>
		
		

    <div id="feature">
    	<div class="inner">
            	<?php 
					tpo_slide_show();
		?>
             
        </div>
    </div>
	<div id="slide_shadow"> </div>

	
<hr />

<div id="content_outer">
	<div id="content_wrapper">
