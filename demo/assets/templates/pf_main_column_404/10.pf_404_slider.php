<?php 
global $wp_query;
$posts = [[
'title' => _t8('404 Not Found'),
'background' => _URL(THEME_ROOT.'/assets/frontend/theme_modules/static/search_bg.jpg'),
'type' => '',
'categories' => "<i class='pandastudio-icons-earth'></i> 未找到页面"
]];
$posts = apply_filters('pf_the_search_slider',$posts);
pf_get_slider($posts);