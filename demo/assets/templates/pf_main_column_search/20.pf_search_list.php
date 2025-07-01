<?php
global $wp_query;$post_ids = wp_list_pluck($wp_query->posts, "ID");$post_type = isset($_GET['post_type']) ? $_GET['post_type'] : 'post';$tabs = apply_filters('pf_search_allowed_posttype',['post' => _t8('文章')]);if (count($tabs) == 1) {$title_text = isset($tabs[$post_type]) ? $tabs[$post_type] : '请使用 pf_search_allowed_posttype 钩子添加此分类的搜索下拉';} else {$list = '';foreach ($tabs as $key => $name) {$li_class = $post_type == $key ? ' class="current"' : '';$link = get_search_link( get_search_query() );$a_href = $post_type == $key ? '' : ' href="'.add_query_arg(['post_type'=>$key],$link).'"';$list .= "<li$li_class><a$a_href>$name</a></li>";}$title_text = '
<span id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
'.$tabs[$post_type].'<span class="caret"></span></span><ul class="dropdown-menu search-dropdown-ul" aria-labelledby="dLabel">
'.$list.'
</ul>
';}?><div class="clearfix"><?php
pf_the_modal_title($title_text, -6);?><div class="row post-card-row"><?php do_action('pf_the_search_articles',$post_ids,-6); ?></div></div>