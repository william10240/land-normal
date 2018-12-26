<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/7/24
 * Time: 18:21
 */
$title = '详情页2';
require 'common/common.php';
require 'common/common_header.php';
require 'common/common_menu.php';
?>
    <style type="text/css">
        .form_tit { width: 70px; }
    </style>
    <!--主体-->
    <div class="main">
        <div>炎煌地产|首页 > 运营服务 > 入住管理 > 入住审批</div>
        <div class="blockbox">
            <div class="sctab"><span>房产管理审批</span></div>
            <div class="form_box">
                <div class="col-xs-12 form_row">
                    <div class="form_tit"> 当前申请:</div>
                    <div class="form_cont">
                        <table class="table table-bordered sctable">
                            <tbody>
                            <tr>
                                <th style="width: 100px;">空间位置</th>
                                <td>炎煌大厦</td>
                            </tr>
                            <tr>
                                <th>操作类型</th>
                                <td>空间合并</td>
                            </tr>
                            <tr>
                                <th>审核内容</th>
                                <td>因业务需要，需将501与502单元合并</td>
                            </tr>
                            <tr>
                                <th>申请人</th>
                                <td>城大理</td>
                            </tr>
                            <tr>
                                <th>申请时间</th>
                                <td>2017-1-1</td>
                            </tr>
                            <tr>
                                <th>相关文档</th>
                                <td>
                                    <div class="fujian"><span class="noborder"><i  class="ico fj"></i> 测绘报告.pdf</span><a href="#">下载</a>|<a href="#">预览</a></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-xs-12 form_row">
                    <div class="form_tit"> 审批结果:</div>
                    <div class="form_cont">
                        <select class="insel">
                            <option>通过</option>
                            <option>不通过</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 form_row">
                    <div class="form_tit"> 审批意见:</div>
                    <div class="form_cont">
                        <textarea style="width: 480px;height: 98px;"></textarea>
                    </div>
                </div>
                <div class="text-center"><br/>
                    <div class="scbtn scbtncancel">取消</div>
                    <div class="scbtn scbtnok ml20">提交</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="hbb mt20"></div>
            <div class="f14 mt20 mb10">历史记录</div>
            <table class="table table-bordered sctable">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>申请人</th>
                    <th>申请时间</th>
                    <th>审批时间</th>
                    <th>审批结果</th>
                    <th>审批意见</th>
                </tr>
                </thead>
                <tbody>
                <?PHP for ($i = 1; $i < 5; $i++) { ?>
                    <tr>
                        <td>1</td>
                        <td>李强</td>
                        <td>2017-1-1</td>
                        <td>2017-1-1</td>
                        <td>通过</td>
                        <td>暂无</td>
                    </tr>
                <?PHP } ?>
                </tbody>
            </table>
        </div>
    </div>

    <form id="hetong" class="scpop" style="display: none;">
        <table class="table table-bordered sctable">
            <thead>
            <tr>
                <th></th>
                <th>客户名称</th>
                <th>合同编号</th>
                <th>租用地点</th>
                <th>租凭开始时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?PHP for ($i = 1; $i < 5; $i++) { ?>
                <tr>
                    <td><label class="sccheck"><input type="checkbox"></label></td>
                    <td>深圳市钱来入驻有限公司</td>
                    <td>0123456789</td>
                    <td>炎煌大厦</td>
                    <td>2017-7-20</td>
                    <td><a href="#">查看详情</a></td>
                </tr>
            <?PHP } ?>
            </tbody>
        </table>
    </form>
    <link rel="stylesheet" href="<?PHP echo $resource; ?>/plugins/dialog/dialog.css">
    <script src="<?PHP echo $resource; ?>/plugins/dialog/dialog.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#edit').click(function () {
                dialog({
                    title: '选择关联合同',
                    content: document.getElementById('hetong'),
                    okValue: '确认',
                    cancelValue: '取消',
                    ok: function () {alert('保存');},
                    cancel: function () {alert('关闭');}

                }).showModal();
            });
        });
    </script>

<?PHP include 'common/common_footer.php'; ?>