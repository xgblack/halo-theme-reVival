<?php
if( _opt('pf_frontpage_random_articles_modal') ) {$type_id = -5;$args = apply_filters('pf_frontpage_modal_query_args',[
'post_type' => 'post','post_status' => 'publish','posts_per_page' => 20,'ignore_sticky_posts' => true,'orderby' => 'rand'
], $type_id);$query_posts = new WP_Query($args);$ids = apply_filters('pf_frontpage_modal_query_result_ids',wp_list_pluck($query_posts->posts, "ID"), $type_id);?><div class="clearfix"><?php pf_the_modal_title( _t8('随机文章{{列表标题}}'), $type_id ); ?><div class="row post-card-nested-row"><?php do_action('pf_the_frontpage_modal_articles',$ids, $type_id); ?></div></div><?php
}