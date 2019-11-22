         $(document).ready(function(){

            $('.wneintstslt01 select').formSelect();

            $('.slider').slider({
                height: 600
            });

            $('.parallax').parallax();

            $('.homecarosol01.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:3
                    }
                }
            });

            $('.recomdwneslde01.owl-carousel').owlCarousel({
                loop:true,
                margin:20,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5,
                        nav:true
                    }
                }
            });

            $('.wraprelaprodinners01.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });

            if (window.matchMedia('(min-width: 800px)').matches) {

                $(window).scroll(function () {
                    //   
                    if ($(this).scrollTop() > 100) {
                    $('.wraptopnaves01').addClass("mainheasticky01");
                    $('.wraptopnaves01').removeClass("mainheasticky02");

                    } else {
                    $('.wraptopnaves01').removeClass("mainheasticky01");
                    $('.wraptopnaves01').addClass("mainheasticky02");

                    }
                });

            }





            // if (window.matchMedia('(max-width: 767px)').matches) {

            //     var prevScrollpos = window.pageYOffset;
            //     window.onscroll = function() {
            //     var currentScrollPos = window.pageYOffset;
            //     if (prevScrollpos > currentScrollPos) {
            //         document.querySelector(".main-header").style.top = "0";
            //     } else {
            //         document.querySelector(".main-header").style.top = "-300px";
            //     }
            //     prevScrollpos = currentScrollPos;
            //     }
        
            //     $(window).scroll(function () {
                    
            //         if ($(this).scrollTop() > 100) {
            //           $('.main-header').addClass("mainheasticky01");
            
            //         } else {
            //           $('.main-header').removeClass("mainheasticky01");
            //           $('.navigation').css({"height":"50px"});
            
            //         }
            //       });
        
            // }
        });



         