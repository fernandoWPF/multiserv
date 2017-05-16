$(document).ready(function () {

    $(window).scroll(function () {

        $('.anime').each(function () {

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if (bottom_of_window > (bottom_of_object - 10)) {
                $(this).css("visibility", "visible");
                $(this).addClass('flip-left');
            }

        });

    });

});