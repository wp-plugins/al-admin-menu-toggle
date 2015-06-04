<?php
/*
Plugin Name: AL | Admin Menu Toggle
Plugin URI: #
Description: Creates Toggle Menu for WP Admin Sidebar.
Author: Sudhakar
Author URI: #
Version: 1.0.0
*/

// +----------------------------------------------------------------------+
// | Copyright Team AL (#)                                                |
// +----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify |
// | it under the terms of the GNU General Public License, version 2, as  |
// | published by the Free Software Foundation.                           |
// |                                                                      |
// | This program is distributed in the hope that it will be useful,      |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of       |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        |
// | GNU General Public License for more details.                         |
// |                                                                      |
// | You should have received a copy of the GNU General Public License    |
// | along with this program; if not, write to the Free Software          |
// | Foundation, Inc., 51 Franklin St, Fifth Floor, Boston,               |
// | MA 02110-1301 USA                                                    |
// +----------------------------------------------------------------------+

add_action( 'admin_head','amt_custom_menu_class' );

function amt_custom_menu_class() {
    global $menu;
    foreach( $menu as $key => $value ) {
        $menu[$key][4] .= " amt-custom-class";
    }
	?>
	<style type="text/css">
		<!--
		.wp-submenu.wp-submenu-wrap {
			left: auto;
			position: relative;
			top: auto;
		}
		#adminmenu .amt-custom-class .wp-submenu {
			left: auto;
			position: relative;
			top: auto;
		}	
		#adminmenu .wp-has-current-submenu .wp-submenu {
			left: auto;
			position: relative;
			top: auto;
			display: block;
		}
		#adminmenumain {
			clear: none;
			float: left;
			overflow: hidden;
		}
		body {
			height: auto;
		}
		.sticky-menu #adminmenuwrap {
			position: relative;
		}
		-->		
	</style>
	<script>	
		<!--
		(function($) {	
			$( document ).ready(function() {
				console.log( "Toggle Menu Working!" );
				$('.wp-submenu').hide();
				$('.wp-has-current-submenu .wp-submenu').show();
				$('.wp-has-submenu a.amt-custom-class').click(function(e) {
					e.preventDefault();
					$(this).parent().find(".wp-submenu").slideToggle( "slow" );
					//$(this).parent().find(".wp-submenu").toggleClass("amt-toggle-active");
				});	
			});			
		})( jQuery );
		-->	
	</script>
	<?php
}
