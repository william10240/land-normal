<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/6/30
 * Time: 11:19
 */
global $title;
$php_Self = substr($_SERVER['PHP_SELF'], strripos($_SERVER['PHP_SELF'], "/") + 1);
$php_Self = str_replace('.php', '', $php_Self);

//  $_GET['s']  是否为静态页
//  $_GET['d']  是否使用dist
//  $_GET['h']  是否隐藏 testbar
if (!empty($_GET['s'])) {
    $resource = 'http://erp.suncoder.cn/resources/v1.0/dist';
} else {
    if (!isset($_GET['d'])) {
        $resource = 'resources/v1.0/dist';
    } else {
        $resource = 'resources/v1.0/src';
    }
}
$resource = 'resources/v1.0/src';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="SunCoder http://www.suncoder.cn">
    <meta name="author" content="SunCoder http://www.suncoder.cn">
    <title><?PHP echo $title ?></title>
    <?PHP if (!empty($_GET['s'])) { ?>
<link href="http://erp.suncoder.cn/favicon.ico" type="image/x-icon" rel="icon"/>
    <link href="http://erp.suncoder.cn/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <?PHP } else { ?>
<link href="favicon.ico" type="image/x-icon" rel="icon"/>
    <link href="favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <?PHP } ?>
<link href="<?PHP echo $resource; ?>/plugins/bootstrap/bootstrap.min.css" rel="stylesheet"/>
    <?PHP if (isset($_GET['d'])) { ?>
<link href="<?PHP echo $resource; ?>/css/style.css" rel="stylesheet">
    <?PHP } else { ?>
<link rel="stylesheet" href="<?PHP echo $resource; ?>/css/1common.css">
        <link href="<?PHP echo $resource; ?>/css/2unit.css" rel="stylesheet">
        <link href="<?PHP echo $resource; ?>/css/3icos.css" rel="stylesheet">
        <link href="<?PHP echo $resource; ?>/css/4overwrite.css" rel="stylesheet">
        <link href="<?PHP echo $resource; ?>/css/5page.css" rel="stylesheet">
        <link href="<?PHP echo $resource; ?>/css/6other.css" rel="stylesheet">
        <link href="<?PHP echo $resource; ?>/css/webuploader_edit.css" rel="stylesheet">
    <?PHP } ?>
<script src="<?PHP echo $resource; ?>/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?PHP echo $resource; ?>/plugins/vue/vue_2.4.2.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?PHP echo $resource; ?>/plugins/dialog/dialog.css">
<script src="<?PHP echo $resource; ?>/plugins/dialog/dialog.js"></script>

</head>
<body>
<?PHP if (!isset($_GET['h'])) { ?>
    <!--以下为测试内容!!!!以下为测试内容!!!!以下为测试内容!!!!以下为测试内容!!!!以下为测试内容!!!!-->
    <div class="testbar">
        <span style="color: #fff;font-size: 18px;">系统前端静态界面展示导航: </span>
        <!--测试条-->
        <button type="button" class="close" style="opacity: 1;color: #fff;" onclick="$('.testbar').remove();"><span>×</span></button>
        <style type="text/css">
            .testbar { position: fixed; left: 0; top: 0; z-index: 1001; width: 100%; height: 70px; overflow: hidden; padding: 10px;
                background-color: #6f5499; background-image: linear-gradient(to bottom, #563d7c 0, #6f5499 100%); }
            .testbtns { display: block !important; }
            .logo-bar { margin-top: 70px; }
            .common-header { margin-top: 70px; }
            .common-side { margin-top: 70px; }
            .main { margin-top: 132px; }
            .mainfull { margin-top: 133px; }
        </style>

        <?PHP
        $urls = [
            'index' => '登陆页',
            //'home' => '首页',
            't1' => '聚合页',
            't2' => '列表页',
            't4' => '列表+二级菜单',
            't1_1' => '详情页_单页',
            't1_2' => '详情页_带菜单',
            't2_1' => '编辑页',
        ];

        foreach ($urls as $k => $v) {
            if (!isset($_GET['s'])) {
                echo '<a type="button" class="btn ' . ($php_Self == $k ? 'btn-success' : 'btn-default') . '" href="' . $k . '.php' . ($_SERVER['QUERY_STRING'] ? ('?' . $_SERVER['QUERY_STRING']) : '') . '">';
            } else {
                echo '<a type="button" class="btn ' . ($php_Self == $k ? 'btn-success' : 'btn-default') . '" href="' . $k . '.html' . '">';
            }
            echo $v;
            echo '</a>' . PHP_EOL;
        } ?>
        <div style="color: #fff;">聚合页顶部条向下的三角有展开效果；主菜单有切换效果；列表页右上角"示例"按钮有弹出操作效果；详情页数字块和"收起"有互动效果；编辑页有美化控件效果radio和checkbox</div>
    </div>
<?PHP } ?>
