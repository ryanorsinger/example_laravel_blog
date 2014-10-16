
//Scroll Animation for About
$(function() {
    //caches a jQuery object containing the header element
    var animate = $("#progress");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 2700) {
            animate.removeClass('display-none').addClass("display");
        } 
    });
});



//Scroll To
$(".scroll").click(function(event){		
	event.preventDefault();
	$("html,body").animate({scrollTop:$(this.hash).offset().top}, 300)
});


//Scroll Spy Refresh
$('#navbar').scrollspy()



//Scroll To Top
$(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
 
        $('.scrollToTop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
 
    });
