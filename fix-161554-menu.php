<?php
/**
 * Plugin Name:     FIX Menu Top
 * Plugin URI:      https://fixonweb.com.br/
 * Description:     Ajustes CSS e JS do menu principal
 * Author:          FIXONWEB
 * Author URI:      https://fixonweb.com.br
 * Text Domain:     fix-161554-menu
 * Domain Path:     /languages
 * Version:         0.1.2
 *
 * @package         Fix_161554_Menu
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

require 'plugin-update-checker.php';
$fix1608230887_url_update   = 'https://github.com/fixonweb/fix-161554-menu';
$fix1608230887_slug         = 'fix-161554-menu/fix-161554-menu';
$fix1608230887_check        = Puc_v4_Factory::buildUpdateChecker($fix1608230887_url_update,__FILE__,$fix1608230887_slug);


function fix_161554_wp_head() {
    ?>
        <style>
            .fixonmobile {
                display: none;
            }
            .fixoffdesktop {
                display: none;
            }
            .fixondesktop {
                display: none;
            }
            @media (max-width: 600px) {
                .fixonmobile {
                    display: block;
                }
            }
            @media (min-width: 600px) {
                .fixondesktop {
                    display: grid;
                }

            }

            #fixmnutop {
                position: fixed;
                width: 100vw;
                transition: all .5s;
            }
        </style>
        <script type="text/javascript">
        	jQuery(window).scroll(function () { 
        		if (jQuery(this).scrollTop() > 80) { 
        			jQuery('#fixmnutop').css('background-color', '#000000AD');
        		} else { 
        			jQuery('#fixmnutop').css('background-color', 'transparent');
        		}
        	});
        </script>
    <?php
}
add_action('wp_head', 'fix_161554_wp_head');

wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js' ), false, null, true );
wp_enqueue_script( 'jquery' );
