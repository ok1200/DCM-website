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
        <title>Servicio Capacitación y Conformación de Brigadas de Emergencia - DCM - Antioquia</title>
        <meta name="description" content="Servicio Capacitación y Conformación de Brigadas de Emergencia - DCM - Antioquia, servicio ofrecido a las empresas que quieren formar brigadas de emergencia con personal responsable que esté atento y comprometido para prevenir y controlar emergencias dentro de su ambiente laboral.">
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

            <div class="Imagen-curso Servicio-7">
              
            </div>                

                 <!-- Servicios header -->
              <div class="container">
                <div class="row Servicio_page-row">                                
                    <div class="col-lg-7 col-md-12 Page_cursos-col" data-aos="fade-up">
                          <section id="tab-1-title" class="Page_cursos_conjunto-1 Page_servicios_title_2">
                            <i class="fas fa-ambulance Page_servicio_icon Page_servicio_icon-1" aria-hidden="true"></i>
                            <h1 class="Titulo Page_servicios_title">Capacitación y Conformación de Brigadas de Emergencia</h1>
                          </section>  
                          <p class="Page_cursos-description">Capacitación para realizar la correcta conformación de brigadas de emergencia con personas debidamente motivadas, entrenadas y capacitadas, quienes en razón de su permanencia y nivel de responsabilidad asumen la ejecución de procedimientos administrativos u operativos necesarios para prevenir y controlar la emergencia.</p>
                          <a href="tel:+573124567834" class="Cursos_info">
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
                    <!--Formulario -->
                    <div id="Form" class="col-lg-4 col-md-8 col-12 offset-lg-1 Form Constructor Page_cursos_form">
                      <h4 class="Page_cursos_title-inscribete">Consulta este <br>servicio ahora</h4>

                      <?php (isset($_POST["servicio"])) ? $servicio = $_POST["servicio"] : $servicio=7; ?>
                      <?php require 'formulario-servicios.php'; ?>

                      <div class="done-message">
                        Tu mensaje ha sido enviado exitosamente!
                      </div>
                      
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
            <script type="text/javascript">
                $(document).ready(function() {
                    jQuery(function(){
                    "use strict";

                    initFormValidation();
                });

                // form validation init
                function initFormValidation() {
                    //if submit button is clicked
                    $('#submit').click(function () {
                      console.log("Funcionando");

                        //Get the data from all the fields
                        var nombre = $('input[name=nombre]');
                        var telefono = $('input[name=telefono]');
                        var email = $('input[name=email]');
                        var mensaje = $('textarea[name=mensaje]');
                        var returnError = false;

                        //Simple validation to make sure user entered something
                        //Add your own error checking here with JS, but also do some error checking with PHP.
                        //If error found, add hightlight class to the text field
                        if (nombre.val()=='') {
                            nombre.addClass('error');
                            returnError = true;
                        } else nombre.removeClass('error filled');

                        if (telefono.val()=='') {
                            telefono.addClass('error');
                            returnError = true;
                        } else telefono.removeClass('error filled');

                        if (email.val()=='') {
                            email.addClass('error');
                            returnError = true;
                        } else email.removeClass('error');

                         if (mensaje.val()=='') {
                            mensaje.addClass('error');
                            returnError = true;
                        } else mensaje.removeClass('error');


                        // Highlight all error fields, then quit.
                        if(returnError == true) {
                            return false;
                        }

                        //organize the data
                        var data = 'nombre=' + nombre.val() + '&telefono=' + telefono.val() + '&email=' + email.val() + '&mensaje=' + mensaje.val();

                        //show the loading sign
                        $('.loading').show();

                        //start the ajax
                        $.ajax({
                            //this is the php file that processes the data and sends email
                            url: "libs/process-servicios.php",

                            //GET method is used
                            type: "GET",

                            //pass the data
                            data: data,

                            //Do not cache the page
                            cache: false,

                            //success
                            success: function (html) {
                            //if process.php returned 1/true (send mail success)
                                if (html==1) {
                                //hide the form
                                $('.f-contact-form').fadeOut('slow');

                                //show the success message

                                setTimeout(function(){
                                  $(".done-message").addClass("done-message-success");
                                }, 1500);

                                //if process.php returned 0/false (send mail failed)
                                } else alert('Sorry, unexpected error. Please try again later.');
                            }
                        });

                        //cancel the submit button default behaviours
                        return false;
                    });
                }
              });
            </script>      

    </body>
</html>