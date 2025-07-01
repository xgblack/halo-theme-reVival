<?php
$frontpage_categories = _opt('frontpage_categories',[]);$frontpage_categories = apply_filters('pf_the_frontpage_category',$frontpage_categories);if (count($frontpage_categories) > 0) {echo '<div class="scroll-cats">';foreach ($frontpage_categories as $key => $category) {$image = $category['image'] ? $category['image'] : get_frontpage_category_image();echo '
<a class="card" href="'.$category['href'].'" style="background-image:url('.$image.')">
'.$category['name'].'
</a>';}echo '</div>';}