<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	global $hook;
	// If we get this far, we have widgets. Let do this.
?>
<div id="footer-widgets">
        <div id="footer-widget-area" role="complementary">
            <?php $footercolumns = 3 ?>
            
            <?php for($i=1;$i<= $footercolumns ; $i++) { ?>
            <?php
            $columnwidth = 'one_third';	
            
            switch ($i) {
                case 1:
                    $footercolname = 'first';
                    break;
                case 2:
                    $footercolname = 'second';	
                    break;
                case 3:
                    $footercolname = 'third';	
                    break;
                case 4:
                    $footercolname = 'fourth';	
                    break;
                case 5:
                    $footercolname = 'fifth';	
                    break;
                case 6:
                    $footercolname = 'sixth';	
                    break;
            }
            ?>
                        <?php if($i==$footercolumns) { ?>
                            <div class="<?php echo $columnwidth; ?> last">
                        <?php } else { ?>
                            <div class="<?php echo $columnwidth; ?>">
                        <?php } ?>
                
                                <div id="<?php echo $footercolname; ?>" class="widget-area">
                                    <ul class="footerwidget">
                                        <?php if (!dynamic_sidebar( $footercolname.'-footer-widget-area' ) ) {
											$hook->hook( $footercolname.'-footer-widget-area' );
										}
										?>
                                    </ul>
                                </div>
                            </div><!-- #first .widget-area -->
            			<?php } ?>
        </div><!-- #footer-widget-area -->
    <div class="clearboth"></div>
</div><!-- inner -->