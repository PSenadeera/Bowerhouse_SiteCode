$(document).ready(function() {
    var viewportHeight = $(window).innerHeight();
    $('#site-banner, .site-banner-inner').height(viewportHeight); 
    if($(window).innerWidth() > 600 ) {
        $('.banner-header h1').css({
            'paddingTop' : viewportHeight / 3
        });
    } else {
        $('.banner-header h1').css({
            'paddingTop' : viewportHeight / 6
        });
    }
    
});
$(document).ready(function() {
    $('.flexslider').flexslider({
        controlNav: true,               
        directionNav: false,
        slideshowSpeed: 2000,
    });
});
//FLEX CAROUSEL
$(window).load(function() {
  $('.carousel').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 225,
    itemMargin: 5,
    directionNav: false
  });
});
//STICKY-NAVIGATION
$(document).ready(function(){
  $(".navbar-wrapper").sticky({topSpacing:0});
});
//SCROLLTO
$(document).ready(function() {
	$('.link').click(function() {
		$.scrollTo(this.hash, 2000);
		return false;
	});
});

//WHEN SCROLLING FADE IN COLOR.
$(document).ready(function(){
  $elements = $(".fadeThis").map(function(e){
	return $(this);	
}).get();

$(window).scroll(function(){

	$.each($elements,function(){
			/*DIFFERENCE BETWEEN ELEMENT OFFSET FROM DOC  AND
			 *THE RELATIVE OFFSET OF THE ELEMENT FROM THE WINDOW */	
			 $dist =(( $(this).offset().top ) - ( $(window).scrollTop() ));
			if(($dist < 250) || ($dist < 475)){
				if($(this).hasClass("light-word")){$(this).removeClass("mask-grey");}else{
					$(this).removeClass("remove-gray");
				}
				
			} else {
				if($(this).hasClass("light-word")){$(this).addClass("mask-grey");}else{
					$(this).addClass("remove-gray")
				}
				
			}
					
	});/*EACH END*/
	
});/*SCROLL END*/
});

//STELLAR
$(document).ready(function() {
	$(window).stellar();
});

//FITVID.JS
$(document).ready(function(){
    $(".res-video").fitVids();
});

//CONTACT FORM
$(document).ready(function() {
	
	if($("#contact-form").length > 0) {
		
		$("#contact-form").submit(function() {
			
			$(".form-wrapper div.alert-box").remove();
			$(".form-wrapper").prepend('<div data-alert class="alert-box sending-mail"><a href="#" class="close">&times;</a>Sending message</div>');
			var fields = $(this).serializeArray();
			
			$.ajax({
				type: 'POST',
				url : 'send_email.php',
				data : fields,
				dataType: 'json', 
				success: function(data) {
					if(data.error) {
						$.each(data.fields, function(k, v){
							$('.form-wrapper').prepend('<div data-alert class="alert-box c-warning"><a href="#" class="close">&times;</a>' + v + '</div>');
							$('.c-warning').fadeIn(500);
							$(".form-wrapper .sending-mail").remove().fadeOut(500);
						}); 
					} else {
						$("#contact-form").fadeOut(500, function() {
							$("#contact-form").hide().html(data.message).fadeIn(500);
							$(".form-wrapper .sending-mail").remove().fadeOut(500);
						})
					}
				},
				error: function(data) {
					$("#contact-form").hide().html('<p>An error occurred</p>').fadeIn(500);
					$(".form-wrapper .sending-mail").remove().fadeOut(500);
				}
			});
			
			return false;
			
		});
		
	}
	
});
