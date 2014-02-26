=== Plugin Name ===
Contributors: tomsansome
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=sansometom%40gmail%2ecom&lc=GB&item_name=WP%20Image%20Effects%20Generator%20%2d%20Tom%20Sansome&currency_code=GBP&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: image, effects, generator, resize, image effects, upload, automatically
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 1.0.1
License: GPLv2 (or later)
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Generate image effects on upload.

== Description ==

**On upload this plugin will generate the following effects on that image:**

*   Black and white
*   Blurred
*   Sharpened
*   Sepia
*   Pixelate
*   Negative

**All effects come in the following sizes:**

*   1000px x 1000px not cropped
*   800px x 800px not cropped
*   400px x 400px not cropped

These images are displayed in the **Add Media** area under the **Size** dropdown menu for use in pages and posts.

**Usage with Advanced Custom Fields:**

`<?php $image = wp_get_attachment_image_src(get_field('image'), 'image-effects-1000-bw'); ?>
<img src="<?php echo $image[0]; ?>"/>`


== Installation ==

1. Upload the directory `image-effect-generator` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Usage under **Description** tab or visit http://dev.twoblok.es/wp-image-effects-generator

== Frequently Asked Questions ==

**Where can I see a nice page to make me feel better?**

[Visit this page](http://dev.twoblok.es/wp-image-effects-generator).

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).

== Changelog ==

= 1.0.1 =
* Let's go!

== Upgrade Notice ==

= 1.0.1 =
* Let's go!