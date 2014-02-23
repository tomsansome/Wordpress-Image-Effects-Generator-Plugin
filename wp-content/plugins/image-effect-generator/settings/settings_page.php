<?php
add_action('admin_menu', 'image_effects_create_menu');

function image_effects_create_menu() {
  add_options_page('Image Effects Settings', 'Image Effects Settings', 'manage_options', __FILE__, 'image_effects_settings_page',plugins_url('/images/icon.png', __FILE__));
  add_action( 'admin_init', 'register_mysettings' );
}

function register_mysettings() {
  register_setting( 'image-effects-settings-group', 'black_and_white' );
  register_setting( 'image-effects-settings-group', 'some_other_option' );
  register_setting( 'image-effects-settings-group', 'option_etc' );
}

function image_effects_settings_page() {
  include('settings_page_content.php');
} 

?>