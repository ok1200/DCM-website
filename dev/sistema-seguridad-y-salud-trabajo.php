
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
        <title>Servicio de Diseño y Ejecución del Sistema de Seguridad y Salud en el Trabajo (SG-SST) - DCM - Antioquia</title>
        <meta name="description" content="Servicio de Diseño y Ejecución del Sistema de Seguridad y Salud en el Trabajo (SG-SST) - DCM - Antioquia, servicio ofrecido a las empresas que quieren actualizar o empezar la implementación del sistema de seguridad y salud en el trabajo como herramienta para  anticipar, reconocer, evaluar y controlar los riesgos que puedan afectar la seguridad y la salud en el trabajo.">
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- AOS css -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <!-- Fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/libraries.css">

        <!-- Our css -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header id="Header">
            <section class="container-fluid Header Page_cursos">

                <?php $page = "servicios"; require('menu.php');?>

            <div class="Imagen-curso Servicio-12">
              
            </div>                
                
                 <!-- Servicios header -->
              <div class="container">
                <div class="row Servicio_page-row">                                
                    <div class="col-lg-7 col-md-12 Page_cursos-col" data-aos="fade-up">
                          <section id="tab-1-title" class="Page_cursos_conjunto-1 Page_servicios_title_2">
                            <i class="fas fa-list-ol Page_servicio_icon Page_servicio_icon-1 icon-list-ol" aria-hidden="true"></i>
                            <h1 class="Titulo Page_servicios_title">Servicio de Diseño y Ejecución del Sistema de Seguridad y Salud en el Trabajo (SG-SST)</h1>
                          </section>  
                          <p class="Page_cursos-description">Actualización e implementación del Sistema de Gestión de la Seguridad y Salud en el Trabajo (SG-SST) el cual consiste en el desarrollo de un proceso lógico y por etapas, basado en la mejora continua y que incluye la política, la organización, la planificación, la aplicación, la evaluación, la auditoría y las acciones de mejora con el objetivo de anticipar, reconocer, evaluar y controlar los riesgos que puedan afectar la seguridad y la salud en el trabajo.</p>

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

                      <?php (isset($_POST["servicio"])) ? $servicio = $_POST["servicio"] : $servicio=12; ?>
                      <?php require 'formulario-servicios.php'; ?>
                      
                    </div>

                </div>
              </div>
             
              <!-- Artículo header -->                 
            </section>
        </header>
 
        
          <?php require 'servicios-slider.php'; ?>

          <?php require 'footer.php'; ?>


   
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