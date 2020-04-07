var a = "请静待blue hour的来临";
var b = "快逃吧";
var now = new Date();
var hour = now.getHours();
var minu = now.getMinutes();
if (minu < 10) {
    minu = 0 + minu;
}
;var time = hour.toString() + minu.toString();
if ((time > 1834 && time < 1850) || (time > 600 && time < 620)) {
    document.getElementById("result").innerText = b;
} else {
    document.getElementById("result").innerText = a;
}
