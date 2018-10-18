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