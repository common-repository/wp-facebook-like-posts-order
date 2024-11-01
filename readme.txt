=== WP Facebook Like Posts Order  ===
Contributors: lukeud 
Tags: Facebook, likes, social media
Requires at least: 2.8.0
Tested up to: 3.2 
Stable tag: trunk

This plugin allows users to order posts by the total number of Facebook likes.

== Description ==

On WordPress you can order posts by date, title, random ecc. but imagine you set a Facebook Like button on your posts and you want them to be ordered by the total lkes number.

This plugin allows you to order WordPress posts by their Facebook Likes number.

Once installed the plugin, on every new entry you create, will be added a "facebook_likes" custom field.

When you call `<?php the_content(); ?>` function, the plugin checks the number of likes of the post and updates this number.

If you don't use `<?php the_content(); ?>` function, place this funcion inside your LOOP: `<?php update_facebook_likes(); ?>`

To list the posts ordered by facebook likes, your posts query (see the official reference) must be something like this: `<?php query_posts('meta_key=facebook_likes&orderby=meta_value'); ?>`

== Installation ==

1. Download WordPress Facebook Like Posts Order Plugin
2. Upload the entire facebook-like-posts-order folder to the /wp-content/plugins/ directory
3. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Need support? =

Visit [plugin documentation website](http://www.lucamartincigh.com/wordpress-facebook-like-posts-order-plugin/ "plugin documentation")

== Changelog ==

= 1.0 =
* Facebook Like Posts Order plugin released
