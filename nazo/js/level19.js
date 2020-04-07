var _0x7713 = ["Do you not have a phone?", "你们难道没有手机吗？", "match", "userAgent", "iOS", "any", "innerText", "result", "getElementById"];
var a = "Do you not have a phone?";
var b = "你们难道没有手机吗？";
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i) ? true : false
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i) ? true : false
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) ? true : false
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows())
    }
};
if (isMobile.any()) {
    document.getElementById("result").innerText = b
} else {
    document.getElementById("result").innerText = a
}
