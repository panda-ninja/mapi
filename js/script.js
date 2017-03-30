$(document).ready(function(){
 $(window).scroll(function(){
 if ($(window).scrollTop() > 100) {
  $('#scrollToTop').fadeIn();
 } else {
  $('#scrollToTop').fadeOut();
 }
 });
});

function scrolltop()
{
 $('html, body').animate({scrollTop : 0},500);
}

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