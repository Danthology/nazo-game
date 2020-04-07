var fontSizeAuto = function() {
    var viewportWidth = document.documentElement.clientWidth;
    if (viewportWidth > 640) {
        viewportWidth = 640
    }
    if (viewportWidth < 320) {
        viewportWidth = 320
    }
    document.documentElement.style.fontSize = viewportWidth / 6.4 + 'px';
};
fontSizeAuto();
window.onresize = fontSizeAuto;
$(document).ready(function() {
    $(".title").fadeIn(3000);
})
