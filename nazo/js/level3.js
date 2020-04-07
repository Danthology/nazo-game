
$("input").on("input propertychange", function() {
    input = $("input").val().toLowerCase();
    if (input == "danthology") {
        window.location.href = "https://danthology.cn/nazo/level-4";
    }
})
