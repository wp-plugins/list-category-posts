<?php
/**
 * TinyMCE plugin
 */
function add_lcp_button() {
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
   if ( get_user_option('rich_editing') == 'true') {
     add_filter('mce_external_plugins', 'add_lcp_tinymce_plugin');
     add_filter('mce_buttons', 'register_lcp_button');
   }
}

add_action('init', 'add_lcp_button');

function register_lcp_button($buttons) {
   array_push($buttons, "|", "lcp_button");
   return $buttons;
}

function add_lcp_tinymce_plugin($plugin_array) {
   $plugin_array['lcp_button'] = plugins_url() . '/list-category-posts/mce/editor_plugin.js';
   return $plugin_array;
}

function my_refresh_mce($ver) {
  $ver += 3;
  return $ver;
}

add_filter( 'tiny_mce_version', 'my_refresh_mce');