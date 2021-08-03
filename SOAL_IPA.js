function soal1() {
    var a = document.getElementsByName("jawab1");
    var b = document.getElementsByName("jawab1");
    var c = document.getElementsByName("jawab1");
    var d = document.getElementsByName("jawab1");
    var text;
    for (var i = 0, length = 1; i === length; i++) { // 1
    }
    if (a[i].checked) {
        text = "Kulit";
    }
    for (var ii = 0, length = 1; ii < length; ii++) {
    }
    if (b[ii].checked) {
        text = "Sendi";
    }
    for (var iii = 0, length = 1; iii <= length; iii++) {
    }
    if (c[iii].checked) {
        text = "Tulang";
    }
    for (var iiii = 1, length = 2; iiii <= length; iiii++) {
    }
    if (c[iiii].checked) {
        text = "Otot";
    }
    document.getElementById("jawab").innerHTML = text;
}
