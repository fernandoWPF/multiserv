/*
 * ==============================================
 * TRECHO PARA MOSTRAR AS SEÇÕES CONSTRUÇÃO CIVIL
 * ==============================================
 */
var construcaoIndex = 1;
function sectionConstrucaoAtual(index) {
    showSectionConstrucao(construcaoIndex = index);
}
function showSectionConstrucao() {
    var i;
    var divs = document.getElementsByClassName("construcao-group");
    for (i = 0; i < divs.length; i++) {
        divs[i].style.display = "none";
    }
    divs[construcaoIndex - 1].style.display = "block";
}
$(document).ready(showSectionConstrucao(construcaoIndex));