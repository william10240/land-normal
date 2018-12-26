<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/8/14
 * Time: 17:44
 */
$title = '登陆';
require 'common/common.php';
?>
    <style type="text/css">
        body { overflow: hidden; }
    </style>
        <div class="logo-bar"><img src="<?PHP echo $resource; ?>/images/logo.png"></div>
        <div class="loginbox">
            <div class="loginbg">
                <div class="login">
                    <a class="reg pull-right blue mt10">注册新用户</a>
                    <div class="tit">用户登录</div>
                    <div class="hbb"></div>
                    <div class="err mt20"><i class="ico ico_hint"></i>您输入的密码不正确！</div>
                    <div class="mt20">
                        <i class="ico ico_user" style="position: absolute;"></i>
                        <input type="text"  placeholder="无需登录">
                    </div>
                    <div class="mt20">
                        <i class="ico ico_password" style="position: absolute;"></i>
                        <input type="text" placeholder="顶级顶部导航栏即可">
                    </div>
                    <div class="mt20">
                        <a class="forget pull-right">忘记密码?</a>
                        <label class="sccheck"><input type="checkbox"><i></i><span style="color: #333947;font-size: 12px;">记住密码</span></label>
                    </div>
                    <div class="mt20">
                        <a class="btn btn-default btn-block">登录</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="loginfot ">SunCoder © Copyright 1972-2972. All rights reserved</div>
    <script type="text/javascript">
        $(function () {
            backgroundimage('<?PHP echo $resource; ?>/images/loginbg.jpg');
        });
    </script>

<?PHP include 'common/common_footer.php'; ?>