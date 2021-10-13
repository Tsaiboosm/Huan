	(function () {
    // 比例 小图/小放 = 大图/大放 => 小放=小图*大放/大图
    let bl = $('.bpicture').width() / $('.spicture').width();
    // 小放大镜尺寸
    $('.sf').css({ width: $('.spicture').width() * $('.bf').width() / $('.bpicture').width(), height: $('.spicture').height() * $('.bf').height() / $('.bpicture').height() });
    // 获取小图片，添加hover移入移出事件
    $('.spicturea').hover(function () {
        // 鼠标移入，小放大镜显示
        $('.sf').css('visibility', 'visible');
        $('.bf').css('visibility', 'visible');
        // 小放大镜跟随鼠标移动
        $(this).on('mousemove', function (ev) {
            let $leftvalue = ev.pageX - $('.spicture').offset().left - $('.sf').width() / 2;
            let $topvalue = ev.pageY - $('.spicture').offset().top - $('.sf').height() / 2;
            if ($leftvalue < 0) {
                $leftvalue = 0;
            } else if ($leftvalue >= $('.spicture').width() - $('.sf').width()) {
                $leftvalue = $('.spicture').width() - $('.sf').width()
            }
            if ($topvalue < 0) {
                $topvalue = 0
            } else if ($topvalue >= $('.spicture').height() - $('.sf').height()) {
                $topvalue = $('.spicture').height() - $('.sf').height()
            }
            $('.sf').css({
                left: $leftvalue,
                top: $topvalue
            })
            $('.bpicture').css({
                left: -$leftvalue * bl,
                top: -$topvalue * bl
            })
        })
    }, function () {
        $('.sf').css('visibility', 'hidden');
        $('.bf').css('visibility', 'hidden');
    })
})();