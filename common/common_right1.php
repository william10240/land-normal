<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/8/4
 * Time: 9:56
 */
$php_Self = substr($_SERVER['PHP_SELF'], strripos($_SERVER['PHP_SELF'], "/") + 1);
$php_Self = str_replace('.php', '', $php_Self);
if ($php_Self == 'right1') {
    require 'common.php';
}
?>
<?PHP if ($php_Self == 'right1') { ?>
    <style type="text/css">.testbar { display: none; }</style>
    <div class="selnum open">
<?PHP } ?>
    <div class="detail">
        <div class="title">504室<a class="clos" onclick="$('.selnum').removeClass('open');">收起<i class="ico"></i></a></div>
        <div class="form_box pd0">
            <div class="form_row">
                <div class="form_tit"> 空间用途：</div>
                <div class="form_cont">租凭</div>
            </div>
            <div class="col-xs-4 form_row pd0">
                <div class="form_tit"> 建筑面积：</div>
                <div class="form_cont">999999.99㎡</div>
            </div>
            <div class="col-xs-4 form_row pd0">
                <div class="form_tit"> 使用面积：</div>
                <div class="form_cont">99999.99㎡</div>
            </div>
            <div class="col-xs-4 form_row pd0">
                <div class="form_tit"> 公摊面积：</div>
                <div class="form_cont">99999.99㎡</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <a class="scbtn scbtn4"><i class="ico kjsq"></i> 空间管理申请</a>
        <ul class="tab mt20">
            <li class="active">当前合同</li>
            <li>当前合同</li>
            <li>到期合同</li>
        </ul>

        <div class="info">
            <div class="line big pb10">
                <i>合同处理：</i>
                <span>
                    <a class="scbtn scbtn1">续约</a>
                    <a class="scbtn scbtn2">退租</a>
                    <a class="scbtn scbtn3">作废</a>
                </span>
            </div>
            <div class="line big pb10">
                <i>空间操作：</i>
                <span>
                    <a class="scbtn scbtn9"><i class="ico kjgx"></i> 空间变更</a>
                    <a class="scbtn scbtn9"><i class="ico kjgx"></i> 空间规划</a>
                </span>
            </div>
            <div class="line pb10"><i>客户名称：</i><span>深圳青果科技有限公司</span></div>
            <div>
                <div class="half"><i>租金单位：</i><span>120元/(月·)</span></div>
                <div class="half"><i>签订日期：</i><span>2017年7月20日</span></div>
            </div>
            <div>
                <div class="half"><i>所属行业：</i><span>互联网</span></div>
                <div class="half"><i>结束日期：</i><span>2017年7月20日</span></div>
            </div>
        </div>

        <div class="mt10">
            <a class="scbtn scbtn11 active">504 A</a>
            <a class="scbtn scbtn11">504 B</a>
            <a class="scbtn scbtn11">504 C</a>
        </div>
        <a class="scbtn scbtn3 mt10">停用</a>

        <div class="mt20">附件管理：<div class="pull-right" id="upload"></div></div>
        <div class="fujian mt20"><span><i  class="ico fj"></i> 合同摘要合同摘要合同摘要合同摘要合同摘要合同摘要.pdf</span><a href="#">下载</a>|<a href="#">删除</a></div>

        <table class="table sctable mt20">
            <thead>
            <tr>
                <th>时间</th>
                <th>操作人</th>
                <th>版本号</th>
                <th>操作内容</th>
            </tr>
            </thead>
            <tbody>
            <?PHP for ($i = 1; $i < 2; $i++) { ?>
                <tr>
                    <td>201-7-28 15:43:54</td>
                    <td>海彬</td>
                    <td>V2.0</td>
                    <td>进行了一些操作</td>
                </tr>
            <?PHP } ?>
            </tbody>
        </table>

        <span class="banbentitle">版本记录</span>
        <table class="table mt20">
            <thead>
            <tr>
                <td>版本号</td>
                <td>操作人</td>
                <td>生效时间</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>V.20170728</td>
                <td>海彬</td>
                <td>2017-7-28到2017-7-30</td>
                <td><a href="#">查看详情</a></td>
            </tr>
            <tr>
                <td>V.20170728</td>
                <td>海彬</td>
                <td>2017-7-28到2017-7-30</td>
                <td><a href="#">查看详情</a></td>
            </tr>
            </tbody>
        </table>

        <div class="infosel mt20">
            <ul>
                <li class="active">承租人信息</li>
                <li>合同信息</li>
                <li>收支明细</li>
                <li>操作历史</li>
                <li>备注</li>
            </ul>
            <div class="text">
                dasdadsadafashasksfgjhdfg<br/>
                dasdadsadafashasksfgjhdfg<br/>
                dasdadsadafashasksfgjhdfg<br/>
                dasdadsadafashasksfgjhdfg<br/>
                dasdadsadafashasksfgjhdfg<br/>
                dasdadsadafashasksfgjhdfg<br/>
            </div>
        </div>
    </div>

<?PHP if ($php_Self == 'right1') { ?>
    </div>
<?PHP } ?>