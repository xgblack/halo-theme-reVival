<?php
global $wp_query;$posts = [[
'title' => _t8('搜索：').get_search_query(),'background' => _URL(THEME_ROOT.'/assets/frontend/theme_modules/static/search_bg.jpg'),'type' => '','categories' => "<i class='pandastudio-icons-search'></i>"._t8n('找到 {{1}} 个结果{{单数}}','找到 {{1}} 个结果{{复数}}',$wp_query->found_posts)]];$posts = apply_filters('pf_the_search_slider',$posts);pf_get_slider($posts);