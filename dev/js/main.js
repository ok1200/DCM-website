$(document).ready(function (){

        //Smoot Scroll Menu//
      $(".Inicio,.Curso_slider-name").click(function(e){
    	e.preventDefault();
    	var linkHref = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 90
        }, 1200);
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

            //Curso Slider (Slick)//
            // $('.Cursos_slider-row').slick({
            //   infinite: true,
            //   slidesToShow: 3,
            //   slidesToScroll: 1,
            //   autoplaySpeed: 4000,
            //   autoplay: false
            // });

            //Function tab interactivas//
            $("p").click(function(){
                var tabsId = $(this).attr("id");
                $("#" + tabsId + "-title").addClass("active").siblings().removeClass("active");
                $("#" + tabsId + "-content").addClass("active2").siblings().removeClass("active2");
            });

          


})







  

