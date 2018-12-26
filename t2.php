<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/7/24
 * Time: 18:21
 */
$title = '列表页   ';
require 'common.php';
require 'common_header.php';
require 'common_menu.php';
?>
    <style type="text/css">
    </style>
    <!--主体-->
    <div class="main">
        <div class="testbtns" style="float: right;display: none;">示例:<input type="button" id="edit" value="房间编辑"></div>
        <div>炎煌地产|首页 > 运营服务 > 入住管理</div>
        <div class="blockbox">
            <a href="#" class="scbtn scbtn6 pull-right"><i class="ico xjkj mr10"></i>入住申请</a>
            <div class="sctab"><a class="active">入住待办</a><a>入住查询</a></div>
            <div class="settled mt20">
                <form class="search pull-right">
                    <input type="text" style="width: 103px;" value="2017-1-1"/>
                    到
                    <input type="text" style="width: 103px;" value="2017-1-1"/>
                </form>
                <form class="search">
                    <select>
                        <option>楼盘</option>
                        <option>联系人</option>
                    </select>
                    <input type="text" placeholder="请输入楼盘进行查询"/>
                    <a class="btn">查询</a>
                </form>
            </div>
            <table class="table table-bordered sctable mt10">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>客户名称</th>
                    <th>联系人</th>
                    <th>联系电话</th>
                    <th>房屋</th>
                    <th>关联合同号</th>
                    <th>入住时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?PHP for ($i = 1; $i < 20; $i++) { ?>
                    <tr>
                        <td><?PHP echo $i ?></td>
                        <td>美图科技</td>
                        <td>李强</td>
                        <td>18988888888</td>
                        <td>炎煌大厦</td>
                        <td>0123456789</td>
                        <td>2017-0-20</td>
                        <td>
                            <a href="#">详情</a>
                            |
                            <span class="tip more">
                                <a href="#">更多<span class="caret"></span></a>
                                <br/>
                                <div class="btns">
                                    <a href="#">下载通知单</a>
                                    <a href="javascript:;" class="preupload" iid="<?PHP echo $i ?>">上传通知单</a>
                                </div>
                            </span>
                        </td>
                    </tr>
                <?PHP } ?>
                </tbody>
            </table>
            <?PHP include 'common_page.php'; ?>
        </div>
    </div>

    <form id="hetong" class="scpop" style="display: none;">
        <a onclick="testadd()">测试加一行</a>
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
            <tbody id="hetongbox">
            <?PHP for ($i = 1; $i < 3; $i++) { ?>
                <tr>
                    <td><label class="scradio"><input type="radio" name="hetong" value="<?PHP echo $i; ?>"><i></i></label></td>
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
    <input type="hidden" class="hide" id="appid"/>
    <link rel="stylesheet" href="<?PHP echo $resource; ?>/plugins/dialog/dialog.css">
    <script src="<?PHP echo $resource; ?>/plugins/dialog/dialog.js"></script>

    <script src="<?PHP echo $resource; ?>/plugins/webuploader/webuploader.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#edit').click(function () {
                art.dialog({
                    lock: true,
                    fixed: true,
                    drag: false,
                    resize: false,
                    title: '选择关联合同',
                    content: document.getElementById('hetong'),
                    okValue: '确认',
                    cancelValue: '取消',
                    ok: function () {alert('保存');},
                    cancel: function () {alert('关闭');}
                });
            });

            var uploader = WebUploader.create({
                pick: ".preupload",
                server: 't2_u.php',
                fileVal: 'ufile',
                auto: true,
                swf: '<?PHP echo $resource; ?>/plugins/webuploader/Uploader.swf'
            })
                .on('uploadStart', function (file) {
                    uploader.option('formData', {'iid': $('#appid').val()});
                    console.log($('#appid').val());
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

            $(".preupload").click(function () {$('#appid').val($(this).attr("iid"));});
        });
        function testadd() {
            var html = '<tr><td><label class="scradio"><input type="radio" name="hetong"><i></i></label></td> <td>深圳市钱来入驻有限公司</td> <td>0123456789</td><td>炎煌大厦</td><td>2017-7-20</td><td><a href="#">查看详情</a></td></tr>';
            $(html).appendTo('#hetongbox');
            initInput();
        }
    </script>
<?PHP include 'common_footer.php'; ?>