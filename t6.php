<?php
/**
 * Created by PhpStorm.
 * User: SunCoder
 * Date: 2017/7/24
 * Time: 18:21
 */
$title = '编辑页';
require 'common/common.php';
require 'common/common_header.php';
require 'common/common_menu.php';
?>
    <style type="text/css">
        .form_tit { width: 107px;}
        .form_cont { margin-left:107px; }
    </style>
    <!--主体-->
    <div class="main">
        <div>炎煌地产|首页 > 运营服务 > 入住管理 > 入住申请</div>
        <div class="blockbox">
            <div class="sctab"><span>入住申请</span></div>
            <div class="f14 mt20 mb10">关联合同</div>
            <table class="table table-bordered sctable">
                <thead>
                <tr>
                    <th>客户名称</th>
                    <th>租用地点</th>
                    <th>关联合同号</th>
                    <th>申请时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?PHP for ($i = 1; $i < 5; $i++) { ?>
                    <tr>
                        <td>深圳市钱来入驻有限公司</td>
                        <td>炎煌大厦</td>
                        <td>0123456789</td>
                        <td>2017-0-20</td>
                        <td><a href="#">更换合同</a></td>
                    </tr>
                <?PHP } ?>
                </tbody>
            </table>
            <div class="f14 mt20 mb10">入住信息</div>
            <div class="form_box pt20" style="border: 1px solid #E9E8ED;">
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 客户名称:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="深圳市钱来入驻有限公司"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 联系电话:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="18988888888"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 联系人:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="陈大力"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 租用地点:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="炎煌大厦"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 面积:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="深圳市钱来入驻有限公司"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 租期:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="深圳市钱来入驻有限公司"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 物业公司:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="深圳市钱来入驻有限公司"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 房屋管理处:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="深圳市钱来入驻有限公司"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 物业公司地址:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="深圳市钱来入驻有限公司"/></div>
                </div>
                <div class="col-xs-6 form_row">
                    <div class="form_tit"><i class="must"></i> 物业公司电话:</div>
                    <div class="form_cont"><input type="text" class="intxt" value="深圳市钱来入驻有限公司"/></div>
                </div>
                <div class="col-xs-12 form_row">
                    <div class="form_tit"><i class="must"></i> 房屋管理处:</div>
                    <div class="form_cont">
                        <label class="scradio mr20"><input type="radio" name="fwglc" id="fw1"><i></i><span>全部配齐家具电器</span></label>
                        <label class="scradio mr20"><input type="radio" name="fwglc" id="fw2"><i></i><span>配备部分家具电器</span></label>
                        <label class="scradio mr20"><input type="radio" name="fwglc" id="fw3"><i></i><span>空房</span></label>
                    </div>
                </div>
                <div class="col-xs-12 form_row">
                    <div class="form_tit"><i class="must"></i> 额外服务:</div>
                    <div class="form_cont">
                        <label class="scradio mr20"><input type="radio" name="ewfy" id="ew1"><i></i><span>包管理费</span></label>
                        <label class="scradio mr20"><input type="radio" name="ewfy" id="ew2"><i></i><span>不包管理费</span></label>
                    </div>
                </div>
                <div class="col-xs-12 form_row">
                    <div class="form_tit">住宅类(可多选):</div>
                    <div class="form_cont">
                        <label class="sccheck mr20"><input type="checkbox"><i></i><span>包室内清洁</span></label>
                        <label class="sccheck mr20"><input type="checkbox"><i></i><span>包水电费</span></label>
                        <label class="sccheck mr20"><input type="checkbox"><i></i><span>包个人、家庭会员卡</span></label>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="text-center"><br/>
                <div class="scbtn scbtncancel">取消</div>
                <div class="scbtn scbtnok mr20">保存</div>
                <div class="scbtn scbtnok ml20">提交</div>
            </div>
        </div>
    </div>
<?PHP include 'common/common_footer.php'; ?>