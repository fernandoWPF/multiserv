/*
 * ================================
 * TRECHO PARA AJUSTAR O TAMANHO DO
 * FORMULÁRIO DE CONTATO
 * ================================
 */
$(window).bind("resize", function () {
    inputs();
});
function inputs() {
    if (window.innerWidth < 992) {

        $(".form-email").addClass("input-group-sm");
        $(".div-form-email").addClass("form-group-sm");
        $(".form-email").removeClass("input-group-lg");
        $(".div-form-email").removeClass("form-group-lg");
        $(".form-email").removeClass("input-group-md");
        $(".div-form-email").removeClass("form-group-md");
    } else {
        $(".form-email").addClass("input-group-lg");
        $(".div-form-email").addClass("form-group-lg");
        $(".form-email").removeClass("input-group-sm");
        $(".div-form-email").removeClass("form-group-sm");
        $(".form-email").removeClass("input-group-md");
        $(".div-form-email").removeClass("form-group-md");
    }

    if (window.innerWidth < 768) {
        $(".btn-section").addClass("btn-sm");
        $(".btn-section").removeClass("btn-lg");
        $(".btn-section").removeClass("btn-md");
    } else if ((window.innerWidth >= 768) & (window.innerWidth < 991)) {
        $(".btn-section").removeClass("btn-lg");
        $(".btn-section").removeClass("btn-sm");
        $(".btn-section").addClass("btn-md");
    } else {
        $(".btn-section").removeClass("btn-md");
        $(".btn-section").removeClass("btn-sm");
        $(".btn-section").addClass("btn-lg");
    }

    if ($(document).height() <= window.innerHeight) {
        $(".main_footer").addClass("navbar-fixed-bottom");
    } else {
        $(".main_footer").removeClass("navbar-fixed-bottom");
    }
}

/*
 * ================================
 * TRECHO PARA DAR UM SCROLL SUAVE
 * ================================
 */
function scrollSuave() {
    var $doc = $('html, body');
    $('.menu-principal-lista a, .footer-menu a').click(function () {
        $doc.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1700);
        return false;
    });
}
;
/*
 * ================================
 * TRECHO PARA DAR UM SCROLL SUAVE
 * ================================
 */
/*
 * ================================
 * TRECHO PARA MOSTRAR AS SEÇÕES
 * ================================
 */

var sectionIndex = 1;
function sectionAtual(index) {
    showSection(sectionIndex = index);
    $(".btn-section").removeClass("btn-active");
}
function showSection() {
    var i;
    var divs = document.getElementsByClassName("section-group");
    var btns = document.getElementsByClassName("btn-section");
    for (i = 0; i < divs.length; i++) {
        divs[i].style.display = "none";
    }
    for (i = 0; i < btns.length; i++) {
        btns[i].className = btns[i].className.replace(" active", "");
    }
    divs[sectionIndex - 1].style.display = "block";
    btns[sectionIndex - 1].className += " active";
}
$(document).ready(inputs(), scrollSuave(), showSection(sectionIndex));