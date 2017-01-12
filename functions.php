<?php

/****
/...IMPORTANT...
// Copy and paste the following functions in your 
// child theme functions.php file. Make sure you remove
// the beginning php tag <?php if you functions.php has this already
// in the file
*****/


// the following function will create a menu location
// visit appearnace>menus and you will
// see a new menu location Shop Page Menu
// create a new menu and assing this to this menu location

function ac_cust_shop_menu_reg() {
  register_nav_menus(
    array(
      'cust-shop-menu' => __( 'Shop Page Menu' )
    )
  );
}
add_action( 'init', 'ac_cust_shop_menu_reg' );

// the following function will actually add your new menu
// to the shop page jus below the title and above products

function call_custom_menu_shop(){

$menu = wp_nav_menu( array( 
    'theme_location' => 'cust-shop-menu', 
    'container_class' => 'shop-menu-class' ) ); 
	return $menu;
}
add_action('woocommerce_before_shop_loop', 'call_custom_menu_shop');
