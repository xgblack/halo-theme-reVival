<?php
add_action('login_enqueue_scripts','login_protection');
function login_protection(){
    if(($_GET['name'] != 'xg_black') || ($_GET['password'] != 'guess_nm_fuck'))header('Location: https://blog.xgblack.cn');
}
