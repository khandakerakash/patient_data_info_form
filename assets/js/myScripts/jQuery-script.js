/*---------------------------------------------------*/
/* Preloader										 */
/*---------------------------------------------------*/

$(window).load(function(){
    $('.loader').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350);

});
