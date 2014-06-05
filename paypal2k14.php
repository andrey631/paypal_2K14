<?php
/**
 * Plugin Name: Paypal 2K14
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: This is a paypal module.
 * Version: 1.0
 * Author: Andrey Alda
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 */
 
/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
require ABSPATH.'wp-content/plugins/paypal2k14/views/paypal2k14_admin.php';



add_action( 'admin_menu', 'setMenuPage' );

function setMenuPage(){
	add_menu_page( 'Paypal', 'Paypal', 'level_10', 'paypal',array('Paypal_Admin','maintpl'));
	echo 'main_file';
}


?>