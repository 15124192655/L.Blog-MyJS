
    var a_idx = 0;
    jQuery(document).ready(function($) {
        $("body").click(function(e) {
            var a = new Array("计算机原理", "数字信号处理", "离散数学", "概率论与数理统计", "毛泽东思想和中国特色社会主义理论体系概论", "计算方法", "信息与通信技术前沿" ,"形势与政策4", "项目管理与经济决策", "程序设计实践", "体育基础（下）", "西方文明史导论", "手麻了", "歇会儿");
            var $i = $("<span/>").text(a[a_idx]);
            a_idx = (a_idx + 1) % a.length;
            var x = e.pageX,
            y = e.pageY;
            $i.css({
                "z-index": 9999,
                "top": y - 20,
                "left": x,
                "position": "absolute",
                "font-weight": "bold",
                "color": "#ff6651"
            });
            $("body").append($i);
            $i.animate({
                "top": y - 180,
                "opacity": 0
            },
            1500,
            function() {
                $i.remove();
            });
        });
    });
