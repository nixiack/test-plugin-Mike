<?php
/*
 * @package		test-plugin-Mike
 * @author		Mike W
 * @copyright	2022 Mike W
 * @license		GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: test-plugin-Mike
 * Plugin URL: http://testwoo.local/
 * Description: Test plugin that I am creating first time
 * Version: 1.0.0
 * Author: Mike W
 * Author URL: http://testwoo.local/
 * Text Domain: Hello greeting
 * License: GPL v2 or later
 * License URL: http://www.gnu.org/licenses/gp1-2.0.txt
 */

function display_hello_world_page() {
  echo 'Hello John!';
}
function hello_world_admin_menu() {
  add_menu_page(
        'Hello World',// page title
        'Hello World',// menu title
        'manage_options',// capability
        'hello-world',// menu slug
        'display_hello_world_page' // callback function
    );
}
add_action('admin_menu', 'hello_world_admin_menu');
?>
