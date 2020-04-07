
function fun() {
    var hint = $("<form method='get'></form>");
    hint.attr("action", "https://danthology.cn/nazo/hintdownload");
    $(document.body).append(hint);
    hint.submit();
}
