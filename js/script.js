$(document).ready(function(){
	   
 $(window).scroll(function(){
 if ($(window).scrollTop() > 100) {
  $('#scrollToTop').fadeIn();
 } else {
  $('#scrollToTop').fadeOut();
 }
 });
});
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
function scrolltop()
{
 $('html, body').animate({scrollTop : 0},500);
}
//titulo de nosotros
$(function(){
  var $jittery = $('.jiterry'),
      aText    = $jittery.text().split(''),
      letters = '';
  
  for(var i = 0; i < aText.length; i++){
    letters += '<span>'+aText[i]+'</span>';
  }
  
  $jittery.empty().append(letters);
  
  $.each($('span', $jittery), function(i){
    $(this).css('animation-delay', '-'+i+'70ms');
  });
});
//efecto pop up
jQuery(document).ready(function($){
    //open popup
    $('.cd-popup-trigger').on('click', function(event){
        event.preventDefault();
        $('.cd-popup').addClass('is-visible');
    });
    
    //close popup
    $('.cd-popup').on('click', function(event){
        if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
            event.preventDefault();
            $(this).removeClass('is-visible');
        }
    });
    //Cierre popup al hacer clic en el botón de teclado esc
    $(document).keyup(function(event){
        if(event.which=='27'){
            $('.cd-popup').removeClass('is-visible');
        }
    });
});
//efecto pop up
jQuery(document).ready(function($){
    //open popup
    $('.pop-up-general').on('click', function(event){
        event.preventDefault();
        $('.pop-up').addClass('is-visible');
    });
    
    //close popup
    $('.pop-up').on('click', function(event){
        if( $(event.target).is('.cd-popup-close') || $(event.target).is('.pop-up') ) {
            event.preventDefault();
            $(this).removeClass('is-visible');
        }
    });
    //Cierre popup al hacer clic en el botón de teclado esc
    $(document).keyup(function(event){
        if(event.which=='27'){
            $('.pop-up').removeClass('is-visible');
        }
    });
    
});

