<?php
$show_color_palette = apply_filters('pf_show_color_palette',current_user_can('manage_options'));if ($show_color_palette) {?><div class="color-selector-wrapper"><div class="mobile-button show-on-desktop" @click="this.color_palette_toggle()" data-toggle="tooltip" title="<?php _et8("自定义颜色"); ?>" data-placement="bottom"><i class="pandastudio-icons-palette"></i></div><div class="color-palette-main"><?php
if (current_user_can('manage_options')) {?><div class="actions"><button @click="this.cancel_selected_colors()"><?php _et8('取消'); ?></button><button @click="this.save_selected_colors()"><?php _et8('保存'); ?></button></div><?php
}?></div></div><?php
}