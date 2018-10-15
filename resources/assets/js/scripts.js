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