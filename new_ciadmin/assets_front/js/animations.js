//var jQuery = jQuery;

//jQuery.noConflict();

jQuery(document).ready(function(){
 
  

 

  /////////////////////////////
 //***  Module animation ***//
/////////////////////////////






(function(jQuery) {

  jQuery.fn.visible = function(partial) {
    
      var jQueryt            = jQuery(this),
          jQueryw            = jQuery(window),
          viewTop       = jQueryw.scrollTop(),
          viewBottom    = viewTop + jQueryw.height(),
          _top          = jQueryt.offset().top+100,
          _bottom       = _top + jQueryt.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

var win = jQuery(window);
var allMods = jQuery(".rda_opacity,.rda_toleft,.rda_toright,.rda_totop,.rda_tobottom,.rd_chart_black,.rd_chart_white,.rda_fadeIn,.rda_fadeInDown,.rda_fadeInUp,.rda_fadeInLeft,.rda_fadeInRight,.rda_bounceIn,.rda_bounceInDown,.rda_bounceInUp,.rda_bounceInLeft,.rda_bounceInRight,.rda_zoomIn,.rda_flipInX,.rda_flipInY,.rda_bounce,.rda_flash,.rda_shake,.rda_pulse,.rda_swing,.rda_rubberBand,.rda_wobble,.rda_tada");
var count = jQuery(".rd_count_to");


allMods.each(function(i, el) {
  var el = jQuery(el);
  if (el.visible(true)) {
    el.addClass("already-visible"); 
  } 
});


count.each(function(i, el) {
  var el = jQuery(el);
  if (el.visible(true)) {


				var countAsset = jQuery(this),
					countNumber = countAsset.find('.count_number'),
					countDivider = countAsset.find('.count_line').find('span'),
					countSubject = countAsset.find('.count_title');
				
					el.removeClass("rd_count_to");		
		el.addClass("rd_count_to_over");	
					countNumber.countTo({
						onComplete: function () {
							countDivider.animate({
								'width': 50
							}, 400, 'easeOutCubic');
							countSubject.delay(100).animate({
								'opacity' : 1,
								'bottom' : '0px'
							}, 600, 'easeOutCubic');
							
						}
						
					});
    
			
  } 
});


win.scroll(function(event) {
  
jQuery(".rda_opacity").each(function(i, el) {
	
    var el = jQuery(el);
    if (el.visible(true)) {
    
	setTimeout(function () {
        el.addClass('opacity_ani');
    }, 50 * i );
	}
	
  });
jQuery(".rda_toleft").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
      el.addClass("toleft_ani"); 
    } 
  });
jQuery(".rda_toright").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
      el.addClass("toright_ani"); 
    } 
  });
jQuery(".rda_totop").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('totop_ani');
    }, 50 * i );
	}
 });
jQuery(".rda_tobottom").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
      el.addClass("tobottom_ani"); 
    } 
  });
  
  
  
  

jQuery(".rda_fadeIn").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated fadeIn');
    }, 50 * i );
	}
 });  
jQuery(".rda_fadeInDown").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated fadeInDown');
    }, 50 * i );
	}
});  
jQuery(".rda_fadeInUp").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated fadeInUp');
    }, 50 * i );
	}
 });    
jQuery(".rda_fadeInLeft").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated fadeInLeft');
    }, 50 * i );
	}
 });    
jQuery(".rda_fadeInRight").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated fadeInRight');
    }, 50 * i );
	}
 });    
jQuery(".rda_bounceIn").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated bounceIn');
    }, 50 * i );
	}
 });    
jQuery(".rda_bounceInDown").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated bounceInDown');
    }, 50 * i );
	}
 });    
jQuery(".rda_bounceInUp").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated bounceInUp');
    }, 50 * i );
	}
 });    
jQuery(".rda_bounceInLeft").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated bounceInLeft');
    }, 50 * i );
	}
 });    
jQuery(".rda_bounceInRight").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated bounceInRight');
    }, 50 * i );
	}
 });  
jQuery(".rda_zoomIn").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated zoomIn');
    }, 50 * i );
	}
 });   
jQuery(".rda_flipInX").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated flipInX');
    }, 50 * i );
	}
 });   
jQuery(".rda_flipInY").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated flipInY');
    }, 50 * i );
	}
 }); 
   
jQuery(".rda_bounce").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated bounce');
    }, 50 * i );
	}
 });    
jQuery(".rda_flash").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated flash');
    }, 50 * i );
	}
 });    
jQuery(".rda_shake").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated shake');
    }, 50 * i );
	}
 });    
jQuery(".rda_pulse").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated pulse');
    }, 50 * i );
	}
 });    
jQuery(".rda_swing").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated swing');
    }, 50 * i );
	}
 });    
jQuery(".rda_rubberBand").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated rubberBand');
    }, 50 * i );
	}
 });    
jQuery(".rda_wobble").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated wobble');
    }, 50 * i );
	}
 });    
jQuery(".rda_tada").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {
   
	setTimeout(function () {
        el.addClass('animated tada');
    }, 50 * i );
	}
 });  
  
  
  
  
  
  
jQuery(".rd_count_to").each(function(i, el) {
    var el = jQuery(el);
    if (el.visible(true)) {


				var countAsset = jQuery(this),
					countNumber = countAsset.find('.count_number'),
					countDivider = countAsset.find('.count_line').find('span'),
					countSubject = countAsset.find('.count_title');
						el.removeClass("rd_count_to");		
		el.addClass("rd_count_to_over");	
					countNumber.countTo({
						onComplete: function () {
							countDivider.animate({
								'width': 50
							}, 400, 'easeOutCubic');
							countSubject.delay(100).animate({
								'opacity' : 1,
								'bottom' : '0px'
							}, 600, 'easeOutCubic');

						}
					});
    } 
  });
          
});


jQuery(".sustainability-content .column-left").removeClass("already-visible");
jQuery(".sustainability-content .column-left").addClass("zoomIn");

jQuery(".finance-box .box").removeClass("already-visible");
jQuery(".finance-box .box").addClass("flipInY");
});
