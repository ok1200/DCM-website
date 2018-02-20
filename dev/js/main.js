$(document).ready(function (){

        //Smoot Scroll Menu//
      $(".Inicio").click(function(e){
    	e.preventDefault();
    	var linkHref = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 90
        }, 1200);
    });


        $(".Hamburguer_icon, Nav_link").click(function(){
            $(".Hamburguer_icon span").toggleClass("Icon_active");
            $(".nav").toggleClass("Menu_active");
         });

        //Movimiento background header//
        $(window).scroll(function(){
            var x = $(window).scrollTop();
            var y =  x * 0.10;

            $(".Header").css({
                "background-position": "0 -" + y + "px",
            });
        });


        //Cambio a menú fixed//
	    $(window).scroll(function(){
        var posicionDeWindow = $(window).scrollTop();

        if(posicionDeWindow > 501){
            $("#Menu_container").addClass("Fixed_nav");
            $("#Menu_container").css({"position": "fixed"});
            
        }
        else if(posicionDeWindow < 500){
            $("#Menu_container").removeClass("Fixed_nav");
            $("#Menu_container").css({"position": "relative"});

        }
        if(posicionDeWindow > 600){
            $(".Fixed_nav").addClass("Nav_visible");
            $(".Menu_container").css({"background-color": "transparent"});
        }

        else if(posicionDeWindow < 600){
            $(".Fixed_nav").removeClass("Nav_visible");
            $(".Menu_container").css({"background-color": "#eff1f4"});
        }                
    });

            //Animaciones con Scroll//
            AOS.init({
              offset: 50,
              duration: 1200,
              easing: 'ease-in-out',
              delay: 100,
              once: true,
            }); 

            //Tabs control//
            $("ul.Mapa_info-options li:first").addClass("active");
            $('.Mapa_info-description div').hide();
            $('.Mapa_info-description div:first').show();

            $("ul.Mapa_info-options li").click(function(){
                $("ul.Mapa_info-options li").removeClass("active");
                $(this).addClass("active");
                 $(".Mapa_info-description div").hide();

                var activeTab = $(this).attr("href");
                $(activeTab).show();
                return false;
            });


})







  

