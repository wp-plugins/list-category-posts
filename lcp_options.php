<?php
add_action('admin_menu', 'list_category_posts_menu');

function list_category_posts_menu() {
  add_options_page('List Category Posts', 'List Category Posts', 'capability_required', 'your-unique-identifier', 'list_category_posts_options');
}

function list_category_posts_options() {
  include('lcp_options_page.php');
}

function register_lcp_settings() { // whitelist options
  register_setting( 'lcp-options-group', 'list_category_posts_display');
}

?>

