
$( document ).ready(function() {
  $('a[href^=#]').on('click', function(e){
    var href = $(this).attr('href');
    $('html, body').animate({
        scrollTop:$(href).offset().top
    },'slow');
    e.preventDefault();
});
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 5) 
	{$('.top_btn').fadeIn(); }
	else 
	{$('.top_btn').fadeOut();}
});