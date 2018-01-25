$(document).ready(function (){

      $(".Inicio").click(function(e){
    	e.preventDefault();
    	var linkHref = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 90
        }, 1200);
    });

        $(".Header").mousemove(function(ev){
            var x = ev.clientX/50;
            var y = ev.clientY/50;

            $(".Header").css({
                "background-position": -x + "px " + -y + "px",
            },5000);
        });



	    $(window).scroll(function(){
        var posicionDeWindow = $(window).scrollTop();

        if(posicionDeWindow > 501){
            $("#Menu_container").addClass("Fixed_nav");
            
        }
        else if(posicionDeWindow < 500){
            $("#Menu_container").removeClass("Fixed_nav");

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
})







  

