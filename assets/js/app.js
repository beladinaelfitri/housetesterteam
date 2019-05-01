$(document).ready(function(){
    $('#btnEmail').click(function () {
        $('#frmJoin').removeClass('d-none');
        $(this).remove();
        $('html, body').animate({
            scrollTop: $("#frmJoin").offset().top
        }, 1000);
    });

    $('.responsive-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 920,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    var scrollTo = function (selector, speed) {
        $('html, body').animate({
            scrollTop: $(selector).offset().top
        }, speed);
    }
});