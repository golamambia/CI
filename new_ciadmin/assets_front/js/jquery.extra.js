

jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 200) {
		jQuery('.header_area').addClass("fix");
	} else {
		jQuery('.header_area').removeClass("fix");
	}
});



jQuery(document).ready(function(){	
	onloadmethod();	
	
	/*main menu*/
	jQuery(".top-menu ul ul").parent().addClass("dropdown")
	jQuery(".top-menu ul li.dropdown").append("<span class='arrow'></span>")
	jQuery(".top-menu ul li.dropdown .arrow").click(function(){
		
		if (jQuery(this).parent().hasClass('open')) {
			jQuery(this).parent().removeClass("open")
		}else{
			jQuery(this).parent().addClass("open")
		}
	});
	
	jQuery(".btn-topmenu").click(function(){
		jQuery("body").addClass("modal-open");
		jQuery('.top-menu').addClass("open");
	});
	jQuery(".btn-topmenu-close").click(function(){
		jQuery("body").removeClass("modal-open");
		jQuery('.top-menu').removeClass("open");
	});




  $(document).ready(function () {
  //called when key is pressed in textbox
  $("#quantity").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Numbers Only").show().fadeOut("slow");
               return false;
    }
   });
});



	
	jQuery('#event_slider').owlCarousel({
		loop:true,
		autoplay:false,
		margin:30,
		dots:false,
		nav:true,
		navText:[],
        autoplayHoverPause: true,
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			992:{
				items:2
			},
			1199:{
				items:3
			}
		}
	})
    
    jQuery('#heb_slider').owlCarousel({
		loop:true,
		autoplay:true,
		margin:30,
		dots:false,
		nav:true,
		navText:[],
        autoplayHoverPause: true,
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			992:{
				items:2
			},
			1199:{
				items:3
			}
		}
	})
    
    jQuery('#jimbos_slider').owlCarousel({
		loop:true,
		autoplay:true,
		margin:30,
		dots:false,
		nav:true,
		navText:[],
        autoplayHoverPause: true,
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			992:{
				items:2
			},
			1199:{
				items:4
			}
		}
	})
    
    
	
	
jQuery('#TestimonialsCarousel').owlCarousel({
		loop:true,
		margin:0,
		nav: false,
		dots: true,
		autoplay: true,
		responsive:{
			0:{
				items:1
			}
		}
	});

	
});

jQuery(window).resize(function(){	
	onloadmethod();	  
});

function onloadmethod(){	

}





