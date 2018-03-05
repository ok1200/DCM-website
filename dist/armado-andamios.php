
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
        <title>Curso Armado y Desarmado de Andamios - DCM - Antioquia</title>
        <meta name="description" content="Curso Armado y Desarmado de Andamios, en Antioquia para las personas encargadas del armado y desarmado de andamios para el trabajo seguro en alturas, con una duración de 8 horas.">
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
                  <?php $page = "cursos"; require('menu.php');?>
             
                 <!-- Artículo header -->
              <div class="container">
                  <div class="row">
                    <div class="col-12 Subconjunto_2" data-aos="fade-right">
                      <section id="tab-1-title" class="Page_cursos_conjunto-1">
                        <img src="img/curso-6.png" class="img-fluid Page_cursos_img" alt="Cliente-2">
                        <h1 class="Titulo Page_cursos_title">Armado y Desarmado de Andamios</h1>
                      </section>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-7 col-md-12 Page_cursos-col Page_cursos-col-hiden" data-aos="fade-up">
                          <p class="Page_cursos-description">Esta competencia la deben tener las personas que realicen los procesos de armado y desarmado de los andamios en la empresas.</p>
                          <p class="Page_cursos-requisitos">Requisitos</p>

                           <ol class="Page_cursos-requisitos--list">
                            <li class="Page_cursos-requisito"><i class="fas fa-chevron-right Requisito-icon"></i>Certificación médica ocupacional</li>
                            <li class="Page_cursos-requisito"><i class="fas fa-chevron-right Requisito-icon Page_cursos-requisito2"></i>Afiliación y pago vigente a seguridad social</li>
                            <li class="Page_cursos-requisito"><i class="fas fa-chevron-right Requisito-icon Page_cursos-requisito2"></i>Certificación médica de aptitud para realizar trabajo en alturas</li>                            
                            <li class="Page_cursos-requisito"><i class="fas fa-chevron-right Requisito-icon Page_cursos-requisito2"></i>Superar el nivel medio definido por la empresa</li>    
                            <li class="Page_cursos-requisito"><i class="fas fa-chevron-right Requisito-icon Page_cursos-requisito2"></i>Fotocopia de la cédula</li>                         
                          </ol>
                          
                          
                          <div class="Cursos_info-1">
                            <div class="Cursos_info-description">
                              <p class="Cursos_info-title-1">Sede 1</p>
                              <small class="Cursos_info-duration-1">Rionegro, Ant.</small> 
                            </div>
                          </div>
                          <div class="Cursos_info-1">
                            <div class="Cursos_info-description">
                              <p class="Cursos_info-title-1">Sede 2</p>
                              <small class="Cursos_info-duration-1">Puerto Berrío, Ant.</small> 
                            </div>
                          </div>                                                                                                                     
                          <div class="Cursos_info-1">
                            <div class="Cursos_info-description">
                              <p class="Cursos_info-title-1">Duración</p>
                              <small class="Cursos_info-duration-1">8 Horas</small> 
                            </div>
                          </div>
                          <div class="Contacto-info">
                            <a href="tel:+573136893524" class="Cursos_info">
                              <i class="fas fa-phone Cursos_info-icon"></i>
                              <div class="Cursos_info-description">
                                <p class="Cursos_info-title">LLÁMANOS</p>
                                <small class="Cursos_info-duration">313 689 3524</small>
                              </div>
                            </a>
                            <a href="mailto:info@dcmservicios.com" class="Cursos_info">
                              <i class="fas fa-comments Cursos_info-icon"></i>
                              <div class="Cursos_info-description Cursos_info-description-2">
                                <p class="Cursos_info-title">CONTÁCTANOS</p>
                                <small class="Cursos_info-duration">info@dcmservicios.com</small> 
                              </div>
                            </a>                             
                            
                          </div>                           
                    </div>
                    <!--Formulario -->

                    <div id="Form" class="col-xl-4 col-lg-5 col-md-8 col-12 offset-xl-1 Form Constructor Page_cursos_form">
                      <h4 class="Page_cursos_title-inscribete">Inscríbete en este <br> curso ahora</h4>

                      <?php (isset($_POST["curso"])) ? $curso = $_POST["curso"] : $curso=6; ?>
                      <?php require 'formulario-curso.php'; ?>

                    </div>
                  </div>

            </div>
              <!-- Artículo header -->                 
            </section>
        </header>
        
        <?php require 'cursos-slider.php'; ?>

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
                    breakpoint: 1024,
                     settings:{
                       slidesToShow: 2
                     }                
                  },
                  {
                    breakpoint: 765,
                    settings:{
                      slidesToShow: 1
                    }
                  }
                ]

              });
            </script>       

    </body>
</html>