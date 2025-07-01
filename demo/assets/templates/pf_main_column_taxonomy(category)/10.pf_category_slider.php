<?php
global $wp_query;$posts = [];$current_cats = $wp_query->query_vars['cat'];$current_cats = explode(",",$current_cats);foreach (wp_list_pluck($wp_query->posts, "ID") as $post_id) {$post_cats = get_the_category($post_id) ?: [];$cat_str = "";foreach ($post_cats as $cat) {if ($cat_str == "" && in_array($cat->cat_ID, $current_cats)) {$cat_str = $cat->cat_name;}}$posts[] = [
'title' => get_the_title($post_id),'url' => get_permalink($post_id),'thumbnail' => _thumbnail($post_id),'background' => get_post_meta($post_id,'日志头图',true) ?: '','type' => "<i class='pandastudio-icons-category'></i>".$cat_str,//改成本分类名称
'categories' => "<i class='pandastudio-icons-tag'></i>".pf_get_tag_text($post_id, true),//改成 tags
];}$posts = apply_filters('pf_the_taxonomy_slider',$posts);pf_get_slider($posts);