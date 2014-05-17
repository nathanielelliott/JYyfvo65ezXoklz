<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
//if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
	//return;

// If we get this far, we have widgets. Let do this.
?>
<div id="secondary" class="home-widget" role="complementary">
	<?php if( !dynamic_sidebar( 'sidebar-2' ) ) : //show informative text if no widget ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'Great Happy Hour', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="/our-food/"><img alt="Great Happy Hour" src="http://jalapenosonline.com/wp-content/uploads/2014/05/IMG_4755_sm.jpg" /></a>
		<?php _e('Visit us for Happy Hour!', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>

	<?php if( !dynamic_sidebar( 'sidebar-3' ) ) : ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'Our Food', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="/our-food/"><img alt="Our Food" src="http://jalapenosonline.com/wp-content/uploads/2014/05/Paella_sm.jpg" /></a>
		<?php _e('Please visit our gallery of food!', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>

	<?php if( !dynamic_sidebar( 'sidebar-4' ) ) : ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'Explore Our Menus', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="/our-menu/"><img alt="Explore Our Menus" src="http://jalapenosonline.com/wp-content/uploads/2014/05/guac3_sm.jpg" /></a>
		<?php _e('Please explore our menus!', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>
</div><!-- #secondary -->