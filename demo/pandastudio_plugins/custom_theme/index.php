<?php
//您可以在这个文件中编写您的自定义function了
add_action( 'get_header', function() {
    //注册脚本
//    wp_register_script(
//        'custom_js',
//        get_stylesheet_directory_uri().'/pandastudio_plugins/custom_theme/custom_js.js',
//        array(),
//        filemtime(__DIR__.'/custom_js.js')
//    );

    wp_register_script( 'custom_js', get_stylesheet_directory_uri().'/pandastudio_plugins/custom_theme/custom_js.js', false, true,true );
    //注册样式
    wp_register_style(
        'custom_css',
        get_stylesheet_directory_uri().'/pandastudio_plugins/custom_theme/custom_css.css',
        array(),
        filemtime(__DIR__.'/custom_css.css')
    );
    wp_enqueue_script( 'custom_js' );
    wp_enqueue_style( 'custom_css' );
},10);


/**
 * 关闭real-media-library插件更新
 * @param $value
 * @return mixed
 */
function remove_update_notifications( $value ) {

    if ( isset( $value ) && is_object( $value ) ) {
        unset( $value->response[ 'real-media-library/index.php' ] );
    }

    return $value;
}
add_filter( 'site_transient_update_plugins', 'remove_update_notifications' );

//开启博客统计小工具
//include("WordpressRunningInfoStat.php");