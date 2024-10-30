<?php
/* Plugin Name: ckwnc
 * Plugin URI: http://www.ckwnc.com/help.html#wordpress
 * Description: Shortcode for including a ckwnc UML sequence diagram in a Wordpress blog post.
 * Author: Daniel Walton
 * Version: 0.1
 * Author URI: http://www.belteshazzar.com
 *
 * Copyright 2011 Daniel Walton (daniel@belteshazzar.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 */


// Allow text widgets to use shortcodes
add_filter('widget_text', 'do_shortcode');

// [ckwnc] ... code ... [/ckwnc]

function ckwnc_handler($atts,$content=null)
{
  $txt = preg_replace('/<[a-z \/]+>/i','',$content);
  $txt = str_replace( array( "\n", "\r" ), array( "\\n", "\\r" ), $txt );
  ob_start();
?>
  <script type="text/javascript" src="http://www.ckwnc.com/ckwnc.js"></script>
  <script type="text/javascript">
    var scripts = document.getElementsByTagName( 'script' );
    var thisScriptTag = scripts[ scripts.length - 1 ];
    var diag = ckwnc.generate( "<?=$txt;?>" );
    thisScriptTag.parentNode.insertBefore(diag,thisScriptTag);
  </script>
<?
  $result = ob_get_clean();
  return $result;
}

add_shortcode('ckwnc', 'ckwnc_handler');
?>