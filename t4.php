<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/7/25
 * Time: 9:30
 */
$title = '详情页';
require 'common/common.php';
require 'common/common_header.php';
?>
    <style type="text/css">
        .form_tit { width: auto; }
    </style>
    <!--主体-->
    <div class="mainfull">
        <div class="testbtns" style="float: right;display: none;">
            示例:
            <input type="button" id="edit" value="房间编辑">
            <input type="button" id="merge" value="房屋合并">
            <input type="button" id="celc" value="房屋拆分">
            <input type="button" id="apply" value="空间管理申请">
        </div>
        <div>炎煌地产|首页 > 楼宇管理 > 炎煌大厦</div>
        <div class="building">
            <table>
                <tr>
                    <td>
                        <div class="image"><img src="<?PHP echo $resource; ?>/temp/lc.jpg"></div>
                    </td>
                    <td>
                        <div class="info">
                            <select class="form-control">
                                <option>炎煌大厦 A 座</option>
                                <option>炎煌大厦 B 座</option>
                                <option>炎煌大厦 C 座</option>
                            </select>
                            <br/>
                            <table class="info-detail">
                                <tr>
                                    <td class="info-item">
                                        <div class="tit">总体面积</div>
                                        <div class="num">20421.98</div>
                                        <div class="all">总体单元 <span class="blue">211</span></div>
                                    </td>
                                    <td class="info-item">
                                        <div class="tit">已租面积</div>
                                        <div class="num">18763.98</div>
                                        <div class="all">已租单元 <span class="red">189</span></div>
                                    </td>
                                    <td class="info-item">
                                        <div class="tit">待租面积</div>
                                        <div class="num">9873.98</div>
                                        <div class="all">待租单元 <span class="green">32</span></div>
                                    </td>
                                    <td class="info-item">
                                        <div class="tit">自用面积</div>
                                        <div class="num">5587.98</div>
                                        <div class="all">自用单元 <span class="red">15</span></div>
                                    </td>
                                    <td class="info-item last">
                                        <div class="tit">预定面积</div>
                                        <div class="num">6380.98</div>
                                        <div class="all">预定单元 <span class="red">8</span></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="rents">
            <div class="title">
                <div class="tip add pull-right">
                    <div href="#" class="scbtn scbtn6"><i class="ico xjkj mr10"></i>新增空间</div>
                    <br/>
                    <div class="btns">
                        <a href="#" class="scbtn scbtn7"><i class="ico xjlc mr10"></i>新建楼层</a>
                        <a href="#" class="scbtn scbtn8"><i class="ico xjfj mr10"></i>新增房间</a>
                    </div>
                </div>
                <span>楼宇租控</span>
            </div>
            <table class="sel">
                <tr>
                    <td class="left" rowspan="2">
                        <div>楼宇出租率</div>
                        <div class="t">67.76%</div>
                    </td>
                    <td class="right">
                        筛选结果： &nbsp;
                        <a class="seled">待租 <i class="ico"></i></a>
                        <a class="seled">已租 <i class="ico"></i></a>
                        <a class="seled">待租 <i class="ico"></i></a>
                        <a class="seled">待租 <i class="ico"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="right">
                        房间状态： &nbsp;
                        <a class="selbox"><span class="numbox small dz"></span><i>待租</i></a>
                        <a class="selbox"><span class="numbox small yz"></span><i>已租</i></a>
                        <a class="selbox"><span class="numbox small dq"></span><i>到期</i></a>
                        <a class="selbox"><span class="numbox small zy"></span><i>自用</i></a>
                    </td>
                </tr>
            </table>
            <div class="selnum mt20 open">
                <div class="selects">
                    <table class="head">
                        <tr>
                            <th>楼层</th>
                            <td>房屋编号</td>
                        </tr>
                    </table>
                    <?PHP include 'common_right1.php'; ?>
                    <div class="bodybox">
                        <table class="body">
                            <?PHP for ($i = 1; $i < 15; $i++) { ?>
                                <tr>
                                    <th><span class="l">一楼<i></i></span></th>
                                    <td>
                                        <?PHP
                                        $tipstr = "<table><tr><th>房间编号：</td><td>504504504504504504504504504504504504504</td></tr><tr><th>面积：</td><td>451.20</td></tr><tr><th>朝向：</td><td>东</td></tr><tr><th>房屋配置：</td><td>已装修</td></tr><tr><th>是否可租：</td><td>不可租</td></tr><tr><th>状态细分：</td><td>已租</td></tr><tr><th>建筑面积：</td><td>451.20</td></tr></table>";
                                        for ($a = 0; $a < 3; $a++) { ?>
                                            <span class="numbox dz" title="<?PHP echo $tipstr ?>">802</span>
                                            <span class="numbox yz" title="<?PHP echo $tipstr ?>">802</span>
                                            <span class="numbox dq" title="<?PHP echo $tipstr ?>">802</span>
                                            <span class="numbox zy" title="<?PHP echo $tipstr ?>">802</span>
                                        <?PHP } ?>
                                    </td>
                                </tr>
                            <?PHP } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="editpop" class="scpop" style="display: none;padding: 10px 60px;">
        <span>房号：</span>
        <input type="text" class="form-control" value="504">
        <br/><br/>
        <span>面积：</span>
        <input type="email" class="form-control m2" value="451.20">
    </form>
    <form id="mergepop" class="scpop" style="display: none;width: 506px;">
        <div class="info">当前房号:<span class="num">504</span>面积:<span class="area">451.20</span></div>
        <div class="tit">选择合并的房号:</div>
        <div class="selnum">
            <label class="sccheck"><input type="checkbox"><i></i><span>501</span></label>
            <label class="sccheck"><input type="checkbox"><i></i><span>502</span></label>
            <label class="sccheck"><input type="checkbox"><i></i><span>503</span></label>
            <label class="sccheck"><input type="checkbox"><i></i><span>504</span></label>
        </div>
        <div class="tit">重命名合并房号:</div>
        <div>
            <span>房号：</span>
            <input type="text" class="form-control mr" value="504">
            <span>面积：</span>
            <input type="email" class="form-control m2" value="451.20">
        </div>
    </form>
    <form id="celcpop" class="scpop" style="display: none;width: 533px;">
        <div class="info">当前房号:<span class="num">504</span>面积:<span class="area">451.20</span></div>
        <div class="tit">拆分房间:</div>
        <div class="cont">
            <span>房号：</span>
            <input type="text" class="form-control mr" value="504">
            <span>面积：</span>
            <input type="email" class="form-control m2" value="451.20">
            <span class="add ml10"></span>
        </div>
        <div style="margin-bottom: 13px;">
            <span>房号：</span>
            <input type="text" class="form-control" value="504" style="display: inline-block;width: 180px;margin-right: 40px;">
            <span>面积：</span>
            <input type="email" class="form-control m2" value="451.20" style="display: inline-block;width: 180px;">
            <span class="del ml10"></span>
        </div>
    </form>
    <form id="applypop" class="scpop" style="display: none;width: 533px;">
        <div class="form_box">
            <div class="form_row">
                <div class="form_tit"><i class="must"></i> 操作类型:</div>
                <div class="form_cont">
                    <select class="insel">
                        <option>信息变更</option>
                        <option>空间拆分</option>
                        <option>空间合并</option>
                        <option>空间删除</option>
                        <option>空间停用</option>
                    </select>
                </div>
            </div>
            <div class="form_row">
                <div class="form_tit"><i class="must"></i> 申请内容:</div>
                <div class="form_cont">
                    <textarea style="width: 480px;height: 98px;margin-left: 10px;"></textarea>
                </div>
            </div>
            <div class="form_row">
                <div class="form_tit"><i class="must"></i> 审批人:</div>
                <div class="form_cont">
                    <select class="insel" style="margin-top: 5px;">
                        <option>刘建忠</option>
                        <option>刘建忠</option>
                        <option>刘建忠</option>
                        <option>刘建忠</option>
                        <option>刘建忠</option>
                    </select>
                </div>
            </div>
            <a class="scbtn scbtn5">上传附件</a>
            <div class="fujian"><span>合同摘要.pdf</span><a href="#">重新上传</a> | <a href="#">删除</a></div>
        </div>
    </form>

    <link rel="stylesheet" href="<?PHP echo $resource; ?>/plugins/dialog/dialog.css">
    <script src="<?PHP echo $resource; ?>/plugins/dialog/dialog.js"></script>

    <script src="<?PHP echo $resource; ?>/plugins/webuploader/webuploader.js"></script>

    <script type="text/javascript">
        $(function () {
            $(".selnum .selects .body tbody tr th").click(function () {$('.selnum').addClass('open');});
            $(".numbox").click(function () {$('.selnum').addClass('open');});
            $('.numbox').tooltip({html: 'html'});
            $(window).scroll(function () {
                if ($(window).scrollTop() > 420) {
                    $(".head").css({'position': 'fixed', 'top': '54px', 'z-index': '999'});
                    $(".common-header").css({'position': 'static'});
                }
                else {
                    $(".head").css({'position': 'static'});
                    $(".common-header").css({'position': 'fixed', 'top': '0'});
                }
            });


            $('#edit').click(function () {
                art.dialog({
                    lock: true,
                    fixed: true,
                    drag: false,
                    resize: false,
                    title: '房间编辑',
                    content: document.getElementById('editpop'),
                    okValue: '保存',
                    cancelValue: '取消',
                    ok: function () {alert('保存');},
                    cancel: function () {alert('关闭');}

                });
            });
            $('#merge').click(function () {
                art.dialog({
                    lock: true,
                    fixed: true,
                    drag: false,
                    resize: false,
                    title: '房屋合并',
                    content: document.getElementById('mergepop'),
                    okValue: '保存',
                    cancelValue: '取消',
                    ok: function () {alert('保存');},
                    cancel: function () {alert('关闭');}

                });
            });
            $('#celc').click(function () {
                art.dialog({
                    lock: true,
                    fixed: true,
                    drag: false,
                    resize: false,
                    title: '房屋拆分',
                    content: document.getElementById('celcpop'),
                    okValue: '保存',
                    cancelValue: '取消',
                    ok: function () {alert('保存');},
                    cancel: function () {alert('关闭');}

                });
            });
            $('#apply').click(function () {
                art.dialog({
                    lock: true,
                    fixed: true,
                    drag: false,
                    resize: false,
                    title: '空间管理申请',
                    content: document.getElementById('applypop'),
                    okValue: '保存',
                    cancelValue: '取消',
                    ok: function () {alert('保存');},
                    cancel: function () {alert('关闭');}

                });
            });

            var uploader = WebUploader.create({
                pick: {
                    id: "#upload",
                    innerHTML: '<a class="scbtn scbtn5 pull-right">上传附件 <i class="ico fjsc"></i></a>'
                },
                server: 't2_u.php',
                fileVal: 'ufile',
                auto: true,
                swf: '<?PHP echo $resource; ?>/plugins/webuploader/Uploader.swf'
            })
                .on('uploadStart', function (file) {
                    // LoadingShow(opts.pick);
                })
                .on('uploadSuccess', function (file, resp) {
                    if (typeof resp.code === 'undefined') {
                        alert('上传失败');
                        console.log(resp);
                        return;
                    }
                    if (resp.code !== 0) {
                        alert(resp.msg);
                        return;
                    }
                    alert(resp.msg);
                })
                .on('uploadError', function (file, resp) {
                    alert('文件上传失败,请重试..' + resp);
                })
                .on('uploadComplete', function (file) {
                    uploader.removeFile(file);
                    // LoadingHide(opts.pick);
                });

        });
    </script>

<?PHP include 'common/common_footer.php'; ?>