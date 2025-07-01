<?php 
$post_id = get_the_ID();
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
		<?php the_content(); ?>
	</article>
	<div class="post-meta-after-content">
		<?php do_action('pf_post_meta_after_content'); ?>
	</div>
</div>