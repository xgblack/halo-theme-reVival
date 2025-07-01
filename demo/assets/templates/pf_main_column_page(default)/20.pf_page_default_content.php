<?php 
$post_id = get_the_ID();
// $content = apply_filters( 'the_content', get_the_content(null,false,$post_id) );
new WP_Query([
	'p' => $post_id
]);
the_post();
 ?>
<div class="post-wrapper">
	<div class="post-meta-before-content">
		<?php do_action('pf_post_meta_before_content'); ?>
	</div>
	<article class="post-content">
		<?php
		//echo $content;
		the_content();
		?>
	</article>
	<div class="post-meta-after-content">
		<?php do_action('pf_post_meta_after_content'); ?>
	</div>
</div>