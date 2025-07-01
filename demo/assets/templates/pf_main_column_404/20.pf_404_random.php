<?php 
$type_id = 0;
$per_page = 12;
$query_posts = new WP_Query([
'post_type' => 'post',
'post_status' => 'publish',
'orderby' => 'rand',
'posts_per_page' => $per_page,
'ignore_sticky_posts' => true,
]);
$ids = wp_list_pluck($query_posts->posts, "ID");
?>
<div class="clearfix">
<?php 
pf_the_modal_title( _t8("随便看看"), $type_id);
 ?>
<div class="row post-card-row">
	<?php do_action('pf_the_search_articles',$ids,$type_id); ?>
</div>
</div>