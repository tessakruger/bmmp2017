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