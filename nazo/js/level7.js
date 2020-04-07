
var xx = 0;
function fun() {
    var hint = new Array("再点一下", "还要再点哦", "继续", "真的需要提示吗", "让我想想要不要告诉你", "干杯");
    x = document.getElementById("u");
    if (xx < 6) {
        x.innerHTML = hint[xx++];
    }
}
