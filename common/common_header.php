<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/6/30
 * Time: 11:19
 */
global $resource;
?>
<!--头部开始-->
<div class="common-header">
    <!--左侧开始-->
    <div class="logo">
        <a><img src="<?PHP echo $resource; ?>/images/logo.png"></a>
    </div>
    <!--右侧开始-->
    <div class="user">
        <div class="app tip">
            <div><i class="ico phon"></i>手机端下载<span class="caret"></span></div>
            <div class="btns qrcode">
                <img src="<?PHP echo $resource; ?>/temp/1.1.png" width="100%">
            </div>
        </div>
        <div class="urls">
            <a href="#"><i class="ico nbgl"></i><br/>顶部菜单</a>
            <a href="#"><i class="ico zhgl"></i><br/>顶部菜单</a>
            <a href="#"><i class="ico htmb"></i><br/>顶部菜单</a>
            <a href="#"><i class="ico bjkj"></i><br/>顶部菜单</a>
        </div>
        <ul class="uinfo">
            <li><a href="#" class="avatar"><img src="<?PHP echo $resource; ?>/temp/ulogo.jpg"></a></li>
            <li class="tip name">
                <div>用户名<span class="caret"></span></div>
                <div class="btns">
                    <a href="#">个人中心</a>
                    <a href="#">退出登录</a>
                </div>
            </li>
            <li class="set"><a href="#">设置</a></li>
        </ul>
    </div>
</div>



