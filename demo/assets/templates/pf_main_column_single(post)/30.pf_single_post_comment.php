<?php
global $post;switch ($post->comment_count) {case 0:
$comment_title = _t8("发表评论");break;default:
$comment_title = _t8n("<b>{{1}}</b>条回应{{单数}}","<b>{{1}}</b>条回应{{复数}}",$post->comment_count);break;}if ('open' == $post->comment_status || $post->comment_count > 0 ):
?><div class="post-comment-wrapper"><div class="title_style_01 post-modal-title"><h2><i class="pandastudio-icons-comment-square"></i><?php echo $comment_title; ?></h2></div><?php
comments_template(apply_filters('pf_comment_template','/assets/templates/comments.php'));?></div><?php endif; ?>