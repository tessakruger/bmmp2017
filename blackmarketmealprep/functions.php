<?php
/**
* Short Codes
*/
/**
* Remove WordPress Admin bar.
*/
add_filter('show_admin_bar', '__return_false');
/**
*Add Styling
*/
wp_enqueue_style( 'style', get_stylesheet_uri() );
/**
**Add Menu management
*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );
/**
* Remove WP Emoji... Not sure why it comes by default.
*/
function disable_wp_emojicons()
{
  // all actions related to emojis
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  // filter to remove TinyMCE emojis
  add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
}
add_action('init', 'disable_wp_emojicons');
function disable_emojicons_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}
/**
* More head cleanup.
*/
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');

// add jquery for mobile nav menu
add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'hamburger-menu', // name your script 
        get_template_directory_uri() . '/js/hamburger-menu.js', // location of js file
        array('jquery') // this array lists the scripts upon which your script depends
    );

// add jquery for lines between how to order steps
    wp_enqueue_script(
        'order-step-lines',
        get_template_directory_uri() . '/js/order-step-lines.js',
        array('jquery')
    );

// add jquery for how to order: delivery pop up
    wp_enqueue_script(
      'order-delivery-popup', 
      get_template_directory_uri() . '/js/order-delivery-popup.js',
      array('jquery')
    );

// add jquery for carousel home: what people are saying
    wp_enqueue_script(
      'carousel', 
      get_template_directory_uri() . '/js/carousel.js',
      array('jquery')
    );
}

// add js for display menu meal items
    wp_enqueue_script(
      'view-meal-menu', 
      get_template_directory_uri() . '/js/view-meal-menu.js',
      array('jquery')
    );

// add js for 'add to cart' overlay on meal menu items
    wp_enqueue_script(
      'overlay', 
      get_template_directory_uri() . '/js/overlay.js',
      array('jquery')
    );

// add js to pop-up delivery and pick up information
    wp_enqueue_script(
      'delivery-popup', 
      get_template_directory_uri() . '/js/delivery-popup.js',
      array('jquery')
    );

// load mixitup for product filtering
    wp_enqueue_script(
      'mixitup.min', 
      get_template_directory_uri() . '/js/mixitup.min.js',
      array('jquery')
    );

//woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' ); }
//woocommerce add to cart button display on shop page
add_action( ‘woocommerce_after_shop_loop_item’, ‘woocommerce_template_loop_add_to_cart’, 10 );

//woocommerce set shop page to show all meal items (up to 25)
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you want to show per page.
  $cols = 25;
  return $cols;
}

//woocommerce change order of checkout billing fields
add_filter("woocommerce_checkout_fields", "custom_order_fields");

function custom_order_fields($fields) {

  $fields['billing']['billing_postcode']['placeholder'] = "Zip Code";

  $order = array(
    "billing_first_name",
    "billing_last_name",
    "billing_company",
    "billing_email",
    "billing_phone",
    "billing_country",
    "billing_address_1",
    "billing_address_2",
    "billing_postcode",
    "billing_city",
    "billing_state"
  );

  foreach($order as $field)
  {
    $ordered_fields[$field] = $fields["billing"][$field];
  }

  $fields["billing"] = $ordered_fields;

  // default priorities: 
  // 'first_name' - 10
  // 'last_name' - 20
  // 'company' - 30
  // 'country' - 40
  // 'address_1' - 50
  // 'address_2' - 60
  // 'city' - 70
  // 'state' - 80
  // 'postcode' - 90

  $fields['billing']['billing_first_name']['priority'] = 10;
  $fields['billing']['billing_last_name']['priority'] = 20;
  $fields['billing']['billing_company']['priority'] = 30;
  $fields['billing']['billing_email']['priority'] = 32;
  $fields['billing']['billing_phone']['priority'] = 31;
  $fields['billing']['billing_country']['priority'] = 40;
  $fields['billing']['billing_address_1']['priority'] = 50;
  $fields['billing']['billing_address_2']['priority'] = 60;
  $fields['billing']['billing_city']['priority'] = 70;
  $fields['billing']['billing_state']['priority'] = 80;
  $fields['billing']['billing_postcode']['priority'] = 90;

  // $fields['billing']['billing_address_2']['placeholder'] = '';
  // $fields['billing']['billing_phone']['placeholder'] = '';
  // $fields['billing']['billing_address_2']['label'] = __( 'City', 'blank' );
  // $fields['billing']['billing_phone']['label'] = __( 'Phone number', 'blank' );

  return $fields;
}

/** FOR FUTURE USE
* Use Post Category to load template

add_filter('single_template', create_function(
'$the_template',
'foreach( (array) get_the_category() as $cat ) {
  if ( file_exists(TEMPLATEPATH . "/templates/single-{$cat->slug}.php") )
  return TEMPLATEPATH . "/templates/single-{$cat->slug}.php"; }
  return $the_template;')
); 
*/

/** For future: 
* Customize login logo

function my_login_logo() { ?>
  <style type="text/css">
  .login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/admin.png);
    padding-bottom: 30px;
  }
  </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'my_login_logo' ); */