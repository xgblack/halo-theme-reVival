<?php
$post_id = get_the_ID();$excerpt = get_post($post_id)->post_excerpt ?: _t8('页面摘要未填写');$posts = [[
'title' => get_the_title($post_id),'background' => get_post_meta($post_id,'日志头图',true) ?: '','categories' => "<i class='pandastudio-icons-category'></i>".htmlspecialchars($excerpt)]];$posts = apply_filters('pf_the_single_slider',$posts);pf_get_slider($posts);