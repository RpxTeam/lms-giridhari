/*
 * Remove loader
 *
 */
$(window).on('load', function() {
    setTimeout(function() {
        $('#loader').fadeOut();
    }, 2000);
});

$('.step-bullets .bullet').click(function(e){
    step = $(this).attr('data-step');
    console.log(step);
    $('.step-bullets .bullet').removeClass('active');
    $(this).addClass('active');

    $('.steps .step').hide();
    $('.steps .step.'+step).show();
});