
$("input").on('input propertychange', function() {
    if ($("input").val() == "答案") {
        window.location.href = "https://danthology.cn/nazo/level-2";
    }
})
