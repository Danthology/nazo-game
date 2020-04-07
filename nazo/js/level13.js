var xx = 0;
function fun() {
    var hint = new Array("想不出来了吗", "要不再自己想想？", "确实有点难", "一位程序员喜欢的喜剧");
    x = document.getElementById("u");
    if (xx < 4) {
        x.innerHTML = hint[xx++];
    }
}
