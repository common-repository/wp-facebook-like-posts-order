<?php
/*
Plugin Name: Facebook Like Posts Order
Plugin URI: http://www.lucamartincigh.com/wordpress-facebook-like-posts-order-plugin/
Description: This plugin allows you to order posts by the number of Facebook Likes
Author: Luca Martincigh
Version: 1.0
Author URI: http://www.lucamartincigh.com
*/

function insert_facebook_likes_custom_field($post_ID) {
   global $wpdb;
   if(!wp_is_post_revision($post_ID)) {
      add_post_meta($post_ID, 'facebook_likes', '0', true);
   }
}

	add_action('publish_page', 'insert_facebook_likes_custom_field');
add_action('publish_post', 'insert_facebook_likes_custom_field');

function update_facebook_likes($content = '') {

	global $wp_query;

	$permalink = get_permalink();

	$idpost = $wp_query->post->ID;

	$data = file_get_contents('http://graph.facebook.com/?id='.$permalink);

	$json = $data;

	$obj = json_decode($json);
	$like_no = $obj->{'shares'};
	$meta_values = get_post_meta($idpost, 'facebook_likes', true);

	if($like_no == null){$like_no = 0;}

   	update_post_meta($idpost, 'facebook_likes', $like_no, false);
	
	return $content;

}

add_action('the_content', 'update_facebook_likes');



/*
query_posts('meta_key=facebook_likes&orderby=meta_value');

<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=box_count&amp;width=70&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:75px; height:90px;" allowTransparency="true"></iframe> 

*/
?>