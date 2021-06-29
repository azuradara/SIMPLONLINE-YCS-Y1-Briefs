<?php

/**
 * @package WFooterPlugin
 * @author azuradara
 */

/*
Plugin Name: WFooter Plugin
Plugin URI: https://github.com/azurdara
Description: Test WP plugin.
Version: 1.0.0
Author: Aymane Dara Hlamnach
Author URI: https://github.com/azuradara
License: GPLv2 or later
Text Domain: wfooter-thingy
*/

defined('ABSPATH') or die('Na.');

class WFooterPlugin
{
  function __construct()
  {
    add_action('wp_footer', [$this, 'inject']);
    add_action('admin_menu', [$this, 'menu']);
  }

  function awaken()
  {
    flush_rewrite_rules();
  }

  function sleep()
  {
    flush_rewrite_rules();
  }

  function inject()
  {
    $opt_TEXT = get_option('wf_opt_text', 'Have some 🍚');
    $opt_HOLDER = get_option('wf_opt_brand', 'WFooter');
    $opt_GITHUB = get_option('wf_opt_github', 'azuradara');

    $date = date("Y");

    echo "
      <footer style='background:#1b1b1b;display:flex;justify-content:space-between;align-items:center;padding:1rem 2rem;'>
        <a style='color:#ccc;' href='https://github.com/$opt_GITHUB'>$opt_TEXT</a>
        <div style='color:#ccc;'>Copyright &copy; $date $opt_HOLDER | All Rights Rerserved</div>
      </footer>
    ";
  }

  function settings()
  {
    echo "<h2>" . __('WFooter Settings Config') . "</h2>";
    include_once('wfooter_settings_page.php');
  }

  function menu()
  {
    add_menu_page(
      'WFooter Config',
      'WFooter',
      'manage_options',
      'wf_config',
      [$this, 'settings'],
      'dashicons-carrot'
    );
  }
}

if (class_exists('WFooterPLugin')) {
  $wf = new WFooterPlugin();
}

register_activation_hook(__FILE__, [$wf, 'awaken']);
register_deactivation_hook(__FILE__, [$wf, 'sleep']);