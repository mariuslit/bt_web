var nao = document.getElementById('nao');
var topPadetis = 0;
var leftPadetis = 300;
var x = 100;

function zemyn() {
    topPadetis += x;
    if(topPadetis > 700){
       topPadetis = 700;
       }
//    informacijos išvedimas į konsolę console.log(...);
    nao.style.top = topPadetis + "px";
    console.log(nao.style.top);
}

function aukstyn() {
    topPadetis -= x;
    if(topPadetis < 0){
       topPadetis = 0;
       }
    nao.style.top = topPadetis + "px";
    console.log(nao.style.top);
}

function desinen() {
    leftPadetis += x;
    if(leftPadetis > 1000){
       leftPadetis = 1000;
       }
    nao.style.left = leftPadetis + "px";
    console.log(nao.style.left);
}

function kairen() {
    leftPadetis -= x;
    if(leftPadetis < 300){
       leftPadetis = 300;
       }
    nao.style.left = leftPadetis + "px";
    console.log(nao.style.left);
}