$(document).ready(function(){
    /* LOGIN 
    =============================== */
    $('#btnEmailLogin').click(function () {
        $('.input-login').hide().removeClass('d-none');
        $('.input-login').slideDown();
        $(this).parent().remove();
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".welcomeHead").offset().top
        }, 1000);
    });

    $('#btnEmailRegis').click(function () {
        $('#frmJoin').removeClass('d-none');
        $(this).remove();
        $('html, body').animate({
            scrollTop: $("#frmJoin").offset().top
        }, 1000);
    });

    $(document).ready(function() {
        var $input = $("#password");
        var $notice = $("#passNotice");
        var color;
        $notice.find('span').css('color', '');

        $input.keyup(function () {
            var text = $.trim($(this).val());
            if(!color)
                color = {
                    good: '#0edb73',
                    bad: 'red'
                };
            
            if (text == null) return;

            $notice.find('span.pass-small').css('color', text.match(/([a-zA-Z])/gi) ? color.good : color.bad);
            $notice.find('span.pass-special').css('color', text.match(/([!@#$&*])/g) ? color.good : color.bad);
            $notice.find('span.pass-num').css('color', text.match(/([\d])/g) ? color.good : color.bad);
            $notice.find('span.pass-len').css('color', text.length > 5 ? color.good : color.bad);
        })
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

    $('.pass-text-toggle').click(function () {
        var $icon = $(this).find('i');
        var isHidden = $icon.hasClass('fa-eye-slash');
        if (isHidden) { // unhide password
            $icon.removeClass('fa-eye-slash');
            $icon.addClass('fa-eye');
            $('#password').attr('type', 'text');
            $('#repassword').attr('type', 'text');
            return;
        }
        $icon.removeClass('fa-eye');
        $icon.addClass('fa-eye-slash');
        $('#password').attr('type', 'password');
        $('#repassword').attr('type', 'password');
    })

    $(document).ready(function() {
        var scrollTo = function (selector, speed) {
            $(selector).click(function () {
                $('html, body').animate({
                    scrollTop: $(selector).offset().top
                }, speed);
            });
        };
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.float-panel').css('display', 'block').addClass('fixed');
        }
        else {
            $('.float-panel').css('display', 'none').removeClass('fixed');
        }
    });

    $(document).on('click', 'a[name=scrollToReviews]', function () {
        $('html, body').animate({
            scrollTop: $("#rev-list").offset().top - 90
        }, 500);
        updateScrollToActive(this);
    });

    $(document).on('click', 'a[name=scrollToTestersGallery]', function () {
        $('html, body').animate({
            scrollTop: $("#galeri-list").offset().top - 40
        }, 500);
        updateScrollToActive(this);
    });

    $(document).on('click', 'a[name=scrollToQuestionAnswer]', function () {
        $('html, body').animate({
            scrollTop: $("#ask-list").offset().top - 40
        }, 500);
        updateScrollToActive(this);
    });

    $(document).ready(function(){
        var mobReviews = $('.float-navigation [name=scrollToReviews]').parent().parent();
        var mobGallery = $('.float-navigation [name=scrollToTestersGallery]').parent().parent();
        var mobQA = $('.float-navigation [name=scrollToQuestionAnswer]').parent().parent();

        $('.float-navigation .float-nav-table').removeClass('activebox');

        if ($("#ask-list").isInViewport() && $("#galeri-list").isInViewport()) {
            var qaPercent = $("#ask-list").isInViewportPercent();
            var tgPercent = $("#galeri-list").isInViewportPercent();
            if (qaPercent > tgPercent) {
                mobQA.addClass('activebox');
            }
            else {
                mobGallery.addClass('activebox');
            }
        } 
        else if ($("#ask-list").isInViewport()) {
            mobQA.addClass('activebox');
        }  
        else if ($("#galeri-list").isInViewport()) {
            mobGallery.addClass('activebox');
        }                             
        else if ($("#rev-list").isInViewport()) {
            mobReviews.addClass('activebox');
        }
    });
});