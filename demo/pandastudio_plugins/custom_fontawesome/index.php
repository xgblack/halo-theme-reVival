<?php
//您可以在这个文件中编写您的自定义function了
add_action( 'init', function(){
    //注册样式
    wp_enqueue_style(
        'fontawesome_css',
        get_template_directory_uri().'/pandastudio_plugins/custom_fontawesome/css/all.min.css',
        false,
        false,
        'all'
    );
    wp_enqueue_style( 'fontawesome_css');
});
//add_action('wp_enqueue_script','load_fontawesome_style');
//function load_fontawesome_style(){
//    global $wp_styles;
//    wp_enqueue_style( 'font-awesome-all',get_template_directory_uri().'/pandastudio_plugins/custom_fontawesome/css/all.min.css',false,false,'all');
//}
