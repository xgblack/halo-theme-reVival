<?php
global $wp_query;$post_ids = wp_list_pluck($wp_query->posts, "ID");?><div class="clearfix"><?php
?><div class="row post-card-row"><?php do_action('pf_the_timeline_articles',$post_ids, -7); ?></div></div>