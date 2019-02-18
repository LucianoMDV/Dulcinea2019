"use strict"
let btnCalcular = document.querySelector(".btnCalcular").addEventListener("click", function calcula() {
    let cantAdultos = document.querySelector(".cantAdultos").value;
    let cantNiños = document.querySelector(".cantNiños").value;
    let subTotalAdultos = cantAdultos*11;
    let subTotalNiños = cantNiños*7;
    let total = subTotalAdultos+subTotalNiños;
    document.querySelector(".subTotalAdultos").innerHTML = subTotalAdultos;
    document.querySelector(".subTotalNiños").innerHTML = subTotalNiños;
    document.querySelector(".total").innerHTML = total;

});
let btnCalcularAl = document.querySelector(".btnCalcularAl").addEventListener("click", function calculaAl() {
    let cantAdultos = document.querySelector(".cantAdultosAl").value;
    let cantNiños = document.querySelector(".cantNiñosAl").value;
    let subTotalAdultos = cantAdultos*7;
    let subTotalNiños = cantNiños*4;
    let total = subTotalAdultos+subTotalNiños;
    document.querySelector(".subTotalAdultosAl").innerHTML = subTotalAdultos;
    document.querySelector(".subTotalNiñosAl").innerHTML = subTotalNiños;
    document.querySelector(".totalAl").innerHTML = total;

});
