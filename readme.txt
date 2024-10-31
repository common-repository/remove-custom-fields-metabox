=== Remove custom fields metabox ===
Contributors: bradleyt
Tags: custom fields, custom, fields, remove, performance, postcustom
Requires at least: 3.0.0
Tested up to: 5.3
Stable Tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Remove the custom fields metabox to improve performance.

== Description ==

This plugin disables the custom fields metabox that WordPress includes by default. The custom fields metabox includes a slow query, which on large sites can take 10+ seconds.

Do not install this plugin if you rely on the custom fields metabox. If you do not know what this means you should probably not install this plugin. If you are using a plugin such as Advanced Custom Fields, Custom Field Suite or similar to manage your custom fields don't worry - these plugins will be unaffected.

The custom fields metabox performance is currently being discussed in [Trac](https://core.trac.wordpress.org/ticket/33885). If you find this plugin useful you may want to follow that ticket.

== Installation ==

Just install Remove custom fields metabox through WP-Admin and you're done. No complicated configuration or code changes required!

== Frequently Asked Questions ==

= Do I need this plugin if I use the Advanced Custom Fields plugin? =

Since ACF 5.6.0, ACF now disables the custom fields metabox itself. Therefore, you do not need to install this plugin if you are already using ACF 5.6+

= Do I need this plugin if I am using the new block editor (Gutenberg)? =

The new block-editor requires users to opt-in to view the custom fields UI, meaning that the performance hit is not incurred for most users.

However, you may want to install this plugin if some of your users are using the Classic Editor plugin, as the classic editor is still impacted by this issue on WordPress 5+

== Changelog ==

= 1.0.1 =
* Update readme.txt

= 1.0 =
* Initial public release