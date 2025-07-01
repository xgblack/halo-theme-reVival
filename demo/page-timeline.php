<?php 
/*
Template Name: 全部文章时间排列
*/
get_header();global$wp_query;global$original_wp_query;$original_wp_query=$wp_query;if(get_query_var('paged')){$paged=get_query_var('paged');}elseif(get_query_var('page')){$paged=get_query_var('page');}else{$paged=0x001;}$wp_query=new WP_Query(['post_type'=> 'post','post_status' =>'publish','paged'=> $paged]);?><div class="container page-timeline"><div class="main-column"><?php  do_action("pf_main_column_page(timeline)");?></div><?php   $edited_wp_query=$wp_query;$wp_query=$original_wp_query;get_sidebar();$wp_query=$edited_wp_query;?></div><?php  get_footer();?>