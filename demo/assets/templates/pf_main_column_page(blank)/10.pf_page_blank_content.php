<?php
$post_id = get_the_ID();$content = apply_filters( 'the_content', get_the_content(null,false,$post_id) );echo $content;