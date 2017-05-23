/*
 * =========================================
 * TRECHO PARA MOSTRAR AS SEÇÕES DEDETIZAÇÃO
 * =========================================
 */
var dedetizacaoIndex = 1;
function sectionDedetizacaoAtual(index) {
    showSectionDedetizacao(dedetizacaoIndex = index);
}
function showSectionDedetizacao() {
    var i;
    var divs = document.getElementsByClassName("dedetizacao-group");
    for (i = 0; i < divs.length; i++) {
        divs[i].style.display = "none";
    }
    divs[dedetizacaoIndex - 1].style.display = "block";
}
$(document).ready(showSectionDedetizacao(dedetizacaoIndex));