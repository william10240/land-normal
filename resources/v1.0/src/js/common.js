/**
 * Created by SunCoder on 2017/7/28.
 */


$(function () {
    initInput();
    $(".scnav li a").click(function () {
        var tis = $(this);
        tis.next(".scnav-second-level").slideToggle(200, function () {
            tis.find(".up").toggle();
            tis.find(".dw").toggle();
        });
    });
});
function Alert(_str, okfunc, cancelfunc) {
    art.dialog({
        lock: true,
        fixed: true,
        drag: false,
        resize: false,
        title: '提示',
        content: _str,
        okValue: '确定',
        ok: okfunc || function () {},
        cancelValue: cancelfunc?'取消':null,
        cancel: cancelfunc
    });
}
function initInput() {
    $(".sccheck input").click(function () {
        $(this).parent().toggleClass("check");
    });
    $(".scradio input").click(function () {
        $('.scradio input[name=' + $(this).attr('name') + ']').parent().removeClass("check");
        $(this).parent().addClass("check");
    });
}
function backgroundimage(imgsrc) {
    var bg = $('#sc_bodybg');
    var bg_img = bg.find('img');
    if (bg.length !== 1) {
        $('body').append('<div id="sc_bodybg"><img alt=""/></div>');
        bg = $('#sc_bodybg');
        bg_img = bg.find('img');
        bg_img.load(_do);
        bg_img.attr('src', imgsrc);
        $(window).resize(_do);

        bg.css({'position': 'absolute', 'left': '0', 'top': '0', 'z-index': '-8', 'overflow': 'hidden'});
        bg_img.css({'position': 'absolute', 'left': '0', 'top': '0', 'z-index': '-9'});

        setTimeout(_do, 500);
        return;
    }
    var cw = getClientWidth(),
        ch = getClientHeight(),
        iw = bg_img.width(),
        ih = bg_img.height();
    bg.css({'width': cw + "px", 'height': ch + "px"});
    if (cw / ch > iw / ih) {
        var new_h = cw * ih / iw,
            imgTop = (ch - new_h) / 2;
        bg_img.css({'width': cw + "px", 'height': new_h + "px", 'top': imgTop + "px", 'left': ""});
    }
    else {
        var new_w = ch * iw / ih,
            imgLeft = (cw - new_w) / 2;
        bg_img.css({'width': new_w + "px", 'height': ch + "px", 'left': imgLeft + "px", 'top': ""});
    }

    function _do() {
        backgroundimage(imgsrc);
    }

    function getClientHeight(doc) {
        var _doc = doc || document;
        return _doc.compatMode == "CSS1Compat" ? _doc.documentElement.clientHeight : _doc.body.clientHeight;
    }

    function getClientWidth(doc) {
        var _doc = doc || document;
        return _doc.compatMode == "CSS1Compat" ? _doc.documentElement.clientWidth : _doc.body.clientWidth;
    }
}