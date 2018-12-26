<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/8/9
 * Time: 11:54
 */
$title = '列表+分级菜单';
require 'common/common.php';
require 'common/common_header.php';
require 'common/common_menu.php';
?>
    <style type="text/css">
        .form_tit { width: 85px; }
        .form_cont { margin-left: 85px; }
    </style>
    <div class="main">
        <div class="mainsub">
            <?PHP include 'common/common_menu2.php'; ?>
            <div>首页 > 运营管理 > 客服管理 > 信息管理</div>
            <div class="blockbox">
                <div class="title yw mb20">
                    <i class="ico"></i>
                    <span>信息管理</span>
                </div>
                <div class="sctab"><a class="active">按客户维度</a><a>按合同维度</a></div>
                <div class="settled mt20">
                    <div class="search pull-right">
                        <a class="btn">导出列表</a>
                        <div class="tip">
                            <a class="btn">更多操作<span class="caret"></span></a>
                            <br/>
                            <div class="btns">
                                <a href="#">导出模板</a>
                                <a href="#">批量修改</a>
                            </div>
                        </div>
                    </div>
                    <form class="search">
                        <input type="text" placeholder="输入合同号搜索">
                        <a class="btn">查询</a>
                        <a class="btn">更多筛选条件<span class="caret"></span></a>
                    </form>
                </div>
                <div class="row form_box mt10">
                    <div class="col-xs-4 form_row">
                        <div class="form_tit">企业名称:</div>
                        <div class="form_cont"><input type="text" class="intxt"></div>
                    </div>
                    <div class="col-xs-4 form_row">
                        <div class="form_tit">项目名称:</div>
                        <div class="form_cont">
                            <select class="insel">
                                <option>炎煌地产</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 form_row">
                        <div class="form_tit">房间号:</div>
                        <div class="form_cont"><input type="text" class="intxt"></div>
                    </div>
                </div>
                <div class="row form_box mt10">
                    <div class="col-xs-4 form_row">
                        <div class="form_tit">行业:</div>
                        <div class="form_cont">
                            <select class="insel">
                                <option>互联网</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 form_row">
                        <div class="form_tit">客户级别:</div>
                        <div class="form_cont">
                            <select class="insel">
                                <option>A</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 form_row">
                        <div class="form_tit">联系人:</div>
                        <div class="form_cont"><input type="text" class="intxt" value="陈大力"></div>
                    </div>
                </div>
                <div class="mt10">
                    <a class="scbtn scbtndef">搜索</a>
                </div>
                <div class="clearfix"></div>
                <table class="table table-bordered sctable mt10">
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>企业名称</th>
                        <th>合同号</th>
                        <th>项目名称</th>
                        <th>房间号</th>
                        <th>行业</th>
                        <th>客户级别</th>
                        <th>联系人</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="2">1</td>
                        <td rowspan="2">深圳市美途科技有限公司</td>
                        <td>qy78291577</td>
                        <td>炎煌地产</td>
                        <td>炎煌大厦A座501</td>
                        <td>互联网</td>
                        <td>A</td>
                        <td>陈大力</td>
                        <td><a>查看详情</a></td>
                    </tr>
                    <tr>
                        <td>qy78291577</td>
                        <td>炎煌地产</td>
                        <td>炎煌大厦A座501</td>
                        <td>互联网</td>
                        <td>A</td>
                        <td>陈大力</td>
                        <td><a>查看详情</a></td>
                    </tr>
                    <?PHP for ($i = 2; $i < 10; $i++) { ?>
                        <tr>
                            <td><?PHP echo $i ?></td>
                            <td>深圳市美途科技有限公司</td>
                            <td>qy78291577</td>
                            <td>炎煌地产</td>
                            <td>炎煌大厦A座501</td>
                            <td>互联网</td>
                            <td>A</td>
                            <td>陈大力</td>
                            <td><a>查看详情</a></td>
                        </tr>
                    <?PHP } ?>
                    </tbody>
                </table>
                <?PHP include 'common/common_page.php'; ?>
            </div>
        </div>
    </div>
    </div>
<?PHP require 'common/common_footer.php'; ?>