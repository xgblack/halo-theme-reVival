<?php

add_filter( 'get_avatar' , 'xgblack_custom_avatar' , 10 , 5 );
function xgblack_custom_avatar( $avatar, $id_or_email, $size, $default, $alt) {

    global $comment,$current_user;

    // $id_or_email的值：后台右上角登录用户头像为id，其他为邮箱，下面做一个判断
    $current_email =  is_int($id_or_email) ? get_user_by( 'ID', $id_or_email )->user_email : $id_or_email;

    $email = !empty($comment->comment_author_email) ? $comment->comment_author_email : $current_email ;

    $random_avatar_arr = array(
        '//file.blog.xgblack.cn/wp-content/uploads/2020/02/bae7d9a8e875ccfbcc7d1bffd4a0eaa0.jpg?x-oss-process=image/auto-orient,1/resize,m_lfit,w_150',
        '//file.blog.xgblack.cn/wp-content/uploads/2020/01/939e9bfd28fb9f427530ba239daf1d1e.jpg?x-oss-process=image/auto-orient,1/resize,m_lfit,w_150',
        '//file.blog.xgblack.cn/wp-content/uploads/2020/01/9557260f3d24ecc8ca38186477e9afd7.jpg?x-oss-process=image/auto-orient,1/resize,m_lfit,w_150',
        '//qn.img.xgblack.cn/blog/avatar/1615013142603.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013178602.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013265486.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013265497.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013265506.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013265514.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013265523.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013265536.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383480.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383493.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383505.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383519.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383534.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383549.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383566.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383585.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383599.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383616.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383632.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013383653.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441546.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441563.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441583.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441606.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441628.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441653.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441675.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441694.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441712.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441733.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441755.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441774.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441792.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441806.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013441820.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534682.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534701.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534719.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534740.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534762.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534781.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534802.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534823.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534845.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534871.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534892.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534912.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534931.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534951.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534975.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013534999.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013535023.jpg?imageView2/5/w/150/h/150/q/75|imageslim',
        '//qn.img.xgblack.cn/blog/avatar/1615013535049.jpg?imageView2/5/w/150/h/150/q/75|imageslim'
    );

    //管理员默认头像
    $admin_avatar = '//file.blog.xgblack.cn/wp-content/uploads/2022/10/%E6%89%8B%E7%BB%98-%E6%9C%89%E5%AD%97.jpg?x-oss-process=image/resize,m_lfit,w_150';

    //判断是否为空
    if (empty($email)) {
        $email = 'xxx@xxx.com';
    }
    //判断是否为管理员ID
    if ($email == 1 || strcasecmp($email, '1') == 0) {
        $email = 'gmg@xgblack.cn';
    }

    $email_hash = md5(strtolower(trim($email)));

    $random_avatar = array_rand($random_avatar_arr,1);

    $src = $random_avatar_arr[$random_avatar] ;

    //gravatar加速镜像

    //国内服务
    //https://cravatar.cn/avatar/后方拼接邮箱md5
    
    //gravatar.loli.net
    //secure.gravatar.com
    //sdn.geekzu.org
    //cn.gravatar.com
    //cdn.v2ex.com
    //cdn.gravatar.xgblack.cn
    $gravatar_image_url = 'cravatar.cn';


    // 提示：d参数404 onerror 方法 - 速度最快
    $avatar = "<img alt='{$alt}' src='//{$gravatar_image_url}/avatar/{$email_hash}?d=404' onerror='javascript:this.src=\"{$src}\";this.onerror=null;' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";

    // 提示：d参数default_img 方法 - 速度稍逊
    //$src = urlencode( $src );
    //$avatar = "<img alt='{$alt}' src='//{$gravatar_image_url}/avatar/{$email_hash}?d={$src}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";


    //
    if (strcasecmp($email, '807513658@qq.com') == 0 || strcasecmp($email, 'gmg@xgblack.cn') == 0 || strcasecmp($email, 'xgblack@qq.com') == 0) {
        //管理员
        $avatar = "<img alt='{$alt}' src='{$admin_avatar}'  class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";
    }


    return $avatar;
}
