<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Canonical Re-Direction -->
        <link rel="canonical" href="">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Rubik:300,400,500,700" rel="stylesheet">
        <title>DCM Servicios y Consultoría - Cursos de Alturas</title>
        <meta name="description" content="DCM - Compañía de Cursos de trabajo seguro en alturas y Servicios en seguridad y salud en el trabajo. Certificados de cursos de alturas, portafolio de servicios para empresas industriales, ambientales y en seguridad en el trabajo. Ubicados en Antioquia">
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- AOS css -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" rel="stylesheet">  

        <!-- Our css -->
        <link rel="stylesheet" href="css/main.css">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115639755-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-115639755-1');
        </script>
    </head>
    <body>
    	<div class="loader-page"></div>
        <header id="Header">
            <section class="container-fluid Header Page_cursos">
              
                <?php $page = "galeria"; require('menu.php');?>

                 <!-- Artículo header -->
              <div class="container Header_articulo Galeria_articulo">
                <h1 class="Galeria_title">GALERÍA DE FOTOS</h1>

              </div>
              <!-- Artículo header -->
            </section>
        </header>

         <!--Galería -->
         <div class="Galeria_container">
           <div class="container Galeria_before">
             <div class='embedsocial-album' data-ref="591e0d2326526a7afa9e24a9e65a630edb01b397">
             </div>
             <script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/ei.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialScript"));</script>
           </div>
         </div>
          <!--Galería -->
 



        <!-- Footer! -->
          <?php require 'footer.php'; ?>

        <!-- Footer! -->


   
            <!-- jQuery first, then Tether, then Bootstrap JS. -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
             <!--then Bootstrap JS. -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
            <!-- AOS javascript -->
            <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
            <!-- Our javascript -->
            <script type="text/javascript" src="js/all.js"></script>

            <script>
            	$(window).on('load', function () {
				      setTimeout(function () {
				    $(".loader-page").css({visibility:"hidden",opacity:"0"})
				  }, 2000);
				     
				});
            </script>
    </body>
</html>