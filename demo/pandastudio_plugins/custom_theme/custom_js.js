
!(function(c,b,d,a){c[a]||(c[a]={});c[a].config=
  {
    pid:"fe00rsw62f@f2d5419185f8ffa",
    appType:"web",
    imgUrl:"https://arms-retcode.aliyuncs.com/r.png?",
    sendResource:true,
    enableLinkTrace:true,
    behavior:true
  };
with(b)with(body)with(insertBefore(createElement("script"),firstChild))setAttribute("crossorigin","",src=d)
})(window,document,"https://retcode.alicdn.com/retcode/bl.js","__bl");


/* 鼠标特效 */
var a_idx = 0;
jQuery(document).ready(function($) {
    $("body").click(function(e) {
        var a = new Array("😀", "😄", "😆", "😏", "😘", "😍", "😋" ,"😋", "😎", "😬","❤", "我是","小光","爱你哦","一起加油");
        var $i = $("<span/>").text(a[a_idx]);
        a_idx = (a_idx + 1) % a.length;
        var x = e.pageX,
            y = e.pageY;
        $i.css({
            "z-index":999999999999999999999999999999999999999999999999999999999999999999999,
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

/*页脚年份更新*/
// $('#c_year').html(new Date().getFullYear());
document.getElementById('c_year').innerHTML = new Date().getFullYear();
