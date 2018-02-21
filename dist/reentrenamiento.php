
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
        <title>Curso Reentrenamiento en Trabajo Seguro en Alturas - DCM - Antioquia</title>
        <meta name="description" content="Curso Reentrenamiento en Trabajo Seguro en Alturas, en Antioquia para trabajadores que requieran la actualización de conocimientos y en cumplimiento al proceso anual obligatorio. Con una duración de 20 horas. ">
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
                        <img src="img/curso-4.png" class="img-fluid Page_cursos_img" alt="Cliente-2">
                        <h1 class="Titulo Page_cursos_title">Reentrenamiento en Trabajo Seguro en Alturas</h1>
                      </section>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-7 col-md-12 Page_cursos-col Page_cursos-col-hiden" data-aos="fade-up">
                          <p class="Page_cursos-description">Proceso anual obligatorio, por el cual se actualizan conocimientos y se entrenan habilidades y destrezas en prevención y protección contra caídas. Solo entidades autorizadas bajo resolución 2578 del 2012 pueden certificar este curso.</p>
                          <p class="Page_cursos-requisitos">Requisitos</p>
                          <i class="fas fa-chevron-right Requisito-icon"><span class="Page_cursos-requisito">Afiliación vigente a seguridad social</span></i>
                          <i class="fas fa-chevron-right Requisito-icon"><span class="Page_cursos-requisito">Certificación médica de aptitud para realizar trabajo en alturas</span></i>
                          <i class="fas fa-chevron-right Requisito-icon"><span class="Page_cursos-requisito">Superar el nivel medio definido por la empresa</span></i>
                          <i class="fas fa-chevron-right Requisito-icon"><span class="Page_cursos-requisito">Fotocopia del documento de identidad</span></i>
                          <i class="fas fa-chevron-right Requisito-icon Page_cursos-requisito2"><span class="Page_cursos-requisito">Certificado del nivel avanzado anterior</span></i>
                          <div class="Cursos_info">
                            <i class="fas fa-map-marker-alt Cursos_info-icon"></i>
                            <div class="Cursos_info-description">
                              <p class="Cursos_info-title">Sede 1</p>
                              <small class="Cursos_info-duration">Rionegro, Antioquia</small> 
                            </div>
                          </div>
                          <div class="Cursos_info">
                            <i class="fas fa-map-marker-alt Cursos_info-icon"></i>
                            <div class="Cursos_info-description">
                              <p class="Cursos_info-title">Sede 2</p>
                              <small class="Cursos_info-duration">Puerto Berrío, Ant.</small> 
                            </div>
                          </div>                                                                                                                     
                          <div class="Cursos_info">
                            <i class="fas fa-clock Cursos_info-icon"></i>
                            <div class="Cursos_info-description">
                              <p class="Cursos_info-title">Duración</p>
                              <small class="Cursos_info-duration">20 Horas</small> 
                            </div>
                          </div>
                    </div>
                    <!--Formulario -->

                    <div id="Form" class="col-lg-4 col-md-8 col-12 offset-lg-1 Form Constructor Page_cursos_form">
                      <h4 class="Page_cursos_title-inscribete">Inscríbete en este <br> curso ahora</h4>

                      <?php (isset($_POST["curso"])) ? $curso = $_POST["curso"] : $curso=4; ?>
                      <?php require 'formulario-curso.php'; ?>

                      <div class="done-message">
                        Tu mensaje ha sido enviado exitosamente!
                      </div>
                        
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
                              var curso = $('select[name=curso]');
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

                               if (curso.val()=='') {
                                  curso.addClass('error');
                                  returnError = true;
                              } else curso.removeClass('error');


                              // Highlight all error fields, then quit.
                              if(returnError == true) {
                                  return false;
                              }

                              //organize the data
                              var data = 'nombre=' + nombre.val() + '&telefono=' + telefono.val() + '&email=' + email.val() + '&curso=' + curso.val();

                              //show the loading sign
                              $('.loading').show();

                              //start the ajax
                              $.ajax({
                                  //this is the php file that processes the data and sends email
                                  url: "libs/process.php",

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