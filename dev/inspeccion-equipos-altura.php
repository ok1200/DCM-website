
<!DOCTYPE html>
<html lang="es">
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
        <title>Servicio Inspección de Equipos de Alturas - DCM - Antioquia</title>
        <meta name="description" content="Servicio Inspección de Equipos de Alturas - DCM - Antioquia, servicio que permite la capacitación a coordinadores de trabajo seguro en alturas y personal administrativo en el cumplimiento de la resolución 1409 que da cumplimiento a la inspección de equipos que sean utilizados para el trabajo en alturas.">
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <!-- Librerias css -->
        <link rel="stylesheet" href="css/libraries.css">

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
        <header id="Header">
            <section class="container-fluid Header Page_cursos">

                <?php $page = "servicios"; require('menu.php');?>

            <div class="Imagen-curso Servicio-9">
              
            </div>                
                
                 <!-- Servicios header -->
              <div class="container">
                <div class="row Servicio_page-row">                                
                    <div class="col-lg-7 col-md-12 Page_cursos-col" data-aos="fade-up">
                          <section id="tab-1-title" class="Page_cursos_conjunto-1 Page_servicios_title_2">
                            <i class="fas fa-search Page_servicio_icon Page_servicio_icon-1 icon-search" aria-hidden="true"></i>
                            <h1 class="Titulo Page_servicios_title">Inspección de Equipos de Alturas</h1>
                          </section>  
                          <p class="Page_cursos-description">Capacitación a coordinadores y personal administrativo en el cumplimiento de la Resolución colombiana 1409 de 2012 que menciona que todo equipo o sistema de protección contra caídas deberá ser inspeccionado previo al uso por el trabajador, y como mínimo una vez al año por intermedio de una persona o equipo de personas avaladas por el fabricante y/o calificadas según corresponda.</p>

                            <a href="tel:+573235816956" class="Cursos_info">
                              <i class="fas fa-phone Cursos_info-icon"></i>
                              <div class="Cursos_info-description">
                                <p class="Cursos_info-title">LLÁMANOS</p>
                                <small class="Cursos_info-duration">323 581 6956 - 531 4404</small> 
                              </div>
                            </a>
                            <a href="mailto:contacto@dcmservicios.com" class="Cursos_info">
                              <i class="fas fa-comments Cursos_info-icon"></i>
                              <div class="Cursos_info-description Cursos_info-description-2">
                                <p class="Cursos_info-title">CONTÁCTANOS</p>
                                <small class="Cursos_info-duration">contacto@dcmservicios.com</small> 
                              </div>
                            </a>                                                                                           
                    </div>
                    <!--Formulario -->
                    <div id="Form" class="col-xl-4 col-lg-5 col-md-8 col-12 offset-xl-1 Form Constructor Page_cursos_form">
                      <h4 class="Page_cursos_title-inscribete">Consulta este <br>servicio ahora</h4>

                      <?php (isset($_POST["servicio"])) ? $servicio = $_POST["servicio"] : $servicio=9; ?>

                      <?php require 'formulario-servicios.php'; ?>
                      
                    </div>

                </div>
              </div>
             
              <!-- Artículo header -->                 
            </section>
        </header>
 
        
          <?php require 'servicios-slider.php'; ?>

          <?php require 'footer.php'; ?>

            <!-- AOS css -->
            <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
            <!-- hover.css -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" rel="stylesheet">        
   
            <!-- jQuery first, then Tether, then Bootstrap JS. -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
             <!--then Bootstrap JS. -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
            <!-- AOS javascript -->
            <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

            <!-- Our javascript -->
            <script type="text/javascript" src="js/all.js"></script>
            <script type="text/javascript">
              $('.Cursos_slider-row').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplaySpeed: 4000,
                autoplay: false,
                responsive:[
                  {
                    breakpoint: 1199,
                     settings:{
                       slidesToShow: 2
                     }                
                  },
                  {
                    breakpoint: 991,
                    settings:{
                      slidesToShow: 1
                    }
                  }
                ]

              });
            </script>    

    </body>
</html>