<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/7/28
 * Time: 17:39
 */
$title = '聚合页';
require 'common.php';
require 'common_header.php';
require 'common_menu.php';
?>
    <!--主体-->
    <div class="main">
        <div>炎煌地产 | 首页 > 楼宇管理</div>
        <!--业务关注规模-->
        <div class="blockbox">
            <div class="title yw mb20">
                <i class="ico yw"></i>
                <span>业务关注规模 · 楼盘一</span>
            </div>
            <table class="info-detail">
                <tr>
                    <td class="info-item">
                        <div class="tit">楼宇总面积</div>
                        <div class="num">20421.98</div>
                        <div class="all">总楼宇 <span class="blue">24</span>栋</div>
                    </td>
                    <td class="info-item">
                        <div class="tit">已租面积</div>
                        <div class="num">18763.98</div>
                        <div class="all">环比增幅 <span class="red">32.33%</span><i class="ico jup"></i></div>
                    </td>
                    <td class="info-item">
                        <div class="tit">可用面积</div>
                        <div class="num">9873.98</div>
                        <div class="all">环比增幅 <span class="green">32</span><i class="ico jup"></i></div>
                    </td>
                    <td class="info-item">
                        <div class="tit">在租均价</div>
                        <div class="num">5587.98</div>
                        <div class="all">环比增幅 <span class="red">15</span><i class="ico jdw"></i></div>
                    </td>
                    <td class="info-item last">
                        <div class="tit">入驻企业</div>
                        <div class="num">6380.98</div>
                        <div class="all">环比增幅 <span class="red">8</span><i class="ico jdw"></i></div>
                    </td>
                </tr>
            </table>
        </div>
        <!--楼盘-->
        <div class="blockbox">
            <div class="title lp">
                <i class="ico lp"></i>
                <span>楼盘：</span>
                <select>
                    <option>炎煌大厦</option>
                    <option>炎煌大厦</option>
                    <option>炎煌大厦</option>
                    <option>炎煌大厦</option>
                </select>
            </div>
            <table class="table table-bordered sctable">
                <thead>
                <tr>
                    <th>楼宇</th>
                    <th>总面积</th>
                    <th>已租面积</th>
                    <th>可租面积</th>
                    <th>在租均价</th>
                    <th>入住企业</th>
                </tr>
                </thead>
                <tbody>
                <?PHP for ($i = 1; $i < 5; $i++) { ?>
                    <tr>
                        <td><a href="#">炎煌大厦A座</a></td>
                        <td>3.12万m</td>
                        <td>2.16万m</td>
                        <td>0.96万m</td>
                        <td>0.96万m</td>
                        <td>133</td>
                    </tr>
                <?PHP } ?>
                </tbody>
            </table>
        </div>
        <!--空间管理申请-->
        <div class="blockbox">
            <div class="title kj">
                <i class="ico kj"></i>
                <span>空间管理申请</span>
            </div>
            <table class="table table-bordered sctable">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>位置</th>
                    <th>申请时间</th>
                    <th>操作内容</th>
                    <th>申请状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?PHP for ($i = 1; $i < 5; $i++) { ?>
                    <tr>
                        <td>1</td>
                        <td>炎煌大厦A座</td>
                        <td>2017-1-1</td>
                        <td>空间合并</td>
                        <td>审批中</td>
                        <td><a href="#">详情</a> | <a href="#">删除</a></td>
                    </tr>
                <?PHP } ?>
                </tbody>
            </table>
        </div>
    </div>

<?PHP include 'common_footer.php'; ?>