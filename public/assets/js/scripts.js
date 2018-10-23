/**
 * Background Image
 */
var bg = $('[data-bg]');
$(bg).each(function () {
    var bg_desk = $(this).attr('data-bg');
    $(this).css({
        'background-image': 'url('+ bg_desk +')'
    });
});

/**
 * Remove loader
 */
$(window).on('load', function() {
    setTimeout(function() {
        $('#loader').fadeOut();
    }, 2000);
});

/**
 * Bullets Introduction
 */
$('.step-bullets .bullet').click(function(e){
    step = $(this).attr('data-step');
    console.log(step);
    $('.step-bullets .bullet').removeClass('active');
    $(this).addClass('active');

    $('.steps .step').hide();
    $('.steps .step.'+step).show();
});

/**
 * Card Toggle
 */
$('.card-btn').on('click', function (e) {
    e.preventDefault();
    $(this).parent().parent().parent().toggleClass('card-open');
    $(this).parent().parent().parent().find('.card-content').slideToggle();
    $(this).parent().parent().parent().find('.card-resume').slideToggle();
});

/**
 * Sliders
 */
$('.slider-courses').slick({
    arrows: false,
    dots: true
});

/**
 * Navtabs
 */
$(document).ready(function() {
    $('.navtabs-bar').each(function() {
        position = $(this).parent().parent().find('li:first-child').position();
        width = $(this).parent().parent().find('li:first-child').width();
        $(this).css({
            left: position.left,
            width: width
        });
    })
});

$('.navtabs a').on('click', function (e) {
    e.preventDefault();
    position = $(this).position();
    width = $(this).width();
    tab = $(this).attr('data-tab');
    bar = $(this).parent().parent().parent().find('.navtabs-bar');
    bar.css({
        left: position.left,
        width: width
    });

    $(this).parent().parent().parent().parent().parent().find('.navtabs-content .tab-content').css({
        display: 'none',
        opacity: 0,
        top: 20
    });

    $(this).parent().parent().parent().parent().parent().find('.navtabs-content .tab-content.'+tab).fadeIn(function () {
        $(this).animate({'opacity': '1', 'top': 0}, 200);
    });
});

/**
 * Modal
 */
$('[data-modal]').on('click', function(e){
    e.preventDefault();
    var modal = $(this).attr('href');
    $(modal).fadeIn();
    $(modal).find('.modal-content').css({
        marginTop: 10
    });
    if(modal === '#modal-conclusion') {
        notifications('Um troféu foi adicionado ao seu perfil.', 'success');
    }
});

$('.btn-close a, .modal .mask').on('click', function(e) {
    e.preventDefault();
    $('.modal').fadeOut();
    $('.modal-content').css({
       marginTop: -30
    });
});

/**
 * Stars Rating
 */
$(document).ready(function(){

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('.stars-rating li').on('mouseover', function(){
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

        // Now highlight all the stars that's not after the current hovered star
        $(this).parent().children('li.star').each(function(e){
            if (e < onStar) {
                $(this).addClass('hover');
            }
            else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function(){
        $(this).parent().children('li.star').each(function(e){
            $(this).removeClass('hover');
        });
    });


    /* 2. Action to perform on click */
    $('.stars-rating li').on('click', function(){
        var onStar = parseInt($(this).data('value'), 10); // The star currently selected
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }

        // JUST RESPONSE (Not needed)
        var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
        var msg = "";
        if (ratingValue > 1) {
            msg = "Thanks! You rated this " + ratingValue + " stars.";
        }
        else {
            msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
        }

    });
});

/**
 * Notifications
 */
function notifications(msg, type) {
    $('#notifications').append('' +
        '<div class="notification '+ type +'">' +
        '<span>'+ msg +'</span>' +
        '</div>');
    setTimeout(function() {
        $('.notification').css({
            top: 0
        });
    }, 400);

    setTimeout(function() {
        $('.notification').css({
            top: -100
        });
    }, 4000);

    setTimeout(function() {
        $('.notification').remove();
    }, 4500);
}
//# sourceMappingURL=scripts.js.map
