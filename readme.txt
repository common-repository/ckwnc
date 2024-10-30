=== Plugin Name ===
Contributors: gbelteshazzar
Donate link: http://www.ckwnc.com/help.html
Tags: uml,developer,sequence,diagram
Tested up to: 3.1.3
Requires at least: 2.5
Stable tag: 1.0

Shortcode for including a ckwnc UML sequence diagram in a Wordpress blog post.

== Description ==

This plugin adds the [ckwnc] shortcode markup to your wordpress installation. This is enabled in posts 
and any text widgets. A complete reference of how to create a ckwnc uml sequence diagram can be found
at http://www.ckwnc.com/help.html

Example Usage:

    [ckwnc]
      me:actor
      data:Data
    
      data.get() {
        me.callback() {
          result.create()
          logging.log() {
            System.print()
          }
        }
      }
      data.release()
    [/ckwnc]

Note that the javascript from http://www.ckwnc.com will be included in your page. We have decided to include
the javascript from our server directly rather than copy a version into the plugin directory so that the 
javascript can be kept up to date.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `ckwnc.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the [ckwnc] short code in your posts.

== Frequently Asked Questions ==

If you have any questions or feedback please direct them to http://www.ckwnc.com/help.html

== Screenshots ==

1. This is an example ckwnc uml sequence diagram.

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

This is an initial release, there is nothing to update from :)