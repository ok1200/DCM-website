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
        <meta name="description" content="">
        <!-- AOS css -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <!-- Fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" rel="stylesheet">  

        <!-- Our css -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header id="Header">
            <section class="container-fluid Header Page_cursos">

                <?php $page = "contacto"; require('menu.php');?>
              <!-- Artículo header -->
                      <!--Contacto form -->
                  <div class="Contacto_form">
                    <h1 class="Galeria_title Contacto_title">CONTÁCTANOS</h1>
                    <div class="container">
                      <h3 class="Contacto_form-title">Escríbenos un mensaje</h3>
                    <div class="row Contacto_form-row">
                      <div class="col-md-5 col-12 Contacto_form-col">
                              
                        <?php require 'formulario-contacto.php'; ?>
                        <div class="done-message">
                          Tu mensaje ha sido enviado exitosamente!
                        </div>

                      </div>

                      <div class="col-md-5 col-12 offset-md-2 Contacto_form-col Contacto_form-img">
                        <img src="img/DCM-Contacto.png" class="img-fluid contacto-plane" alt="Contacto DCM">
                      </div>
                    </div>
                      
                    </div>
                    
                  </div>
                  <!--Contacto form -->

            </section>
        </header>

         
        <!--Mapa -->
        <div class="Contacto-mapa_1">
          <div class="container">
            <div class="row Row-contacto_mapa">
              <div class="col-7">
                <div class="mapa-container">
                   <div id="Mapa_1" class="Mapa">               
                   </div>
                 </div>                                
              </div>
              <div class="col-4 offset-1 Contacto-info">
                <h4 class="Contacto-sede_title"> <i class="fas fa-map-marker-alt Contacto-icon_title"></i>RIONEGRO</h4>
                <small class="Sede_numero">SEDE 1</small>
                <ol class="mb-0"">
                  <li class="Contacto-info_title">Dirección <small class="Contacto-info_description">KM 1 Via Rionegro el Carmen de Viboral</small></li>
                  <li class="Contacto-info_title">Teléfono <small class="Contacto-info_description">313 689 35 24</small></li>
                  <li class="Contacto-info_title">Email <small class="Contacto-info_description">info@dcmservicios.com</small></li>
                </ol>
                
              </div>
            </div>         
          </div>
        </div>
        <!--Mapa -->
        <!--Mapa -->
        <div class="Contacto-mapa_2">
          <div class="container">
            <div class="row Row-contacto_mapa">
              <div class="col-4 Contacto-info">
                <h4 class="Contacto-sede_title"> <i class="fas fa-map-marker-alt Contacto-icon_title"></i>PUERTO BERRÍO</h4>
                <small class="Sede_numero">SEDE 2</small>
                <ol class="mb-0">
                  <li class="Contacto-info_title">Dirección <small class="Contacto-info_description">KM 1 Via La Malena</small></li>
                  <li class="Contacto-info_title">Teléfono <small class="Contacto-info_description">313 689 35 24</small></li>
                  <li class="Contacto-info_title">Email <small class="Contacto-info_description">info@dcmservicios.com</small></li>
                </ol>
                
              </div>
              <div class="col-7 offset-1">
                <div class="mapa-container">
                   <div id="Mapa_2" class="Mapa">               
                   </div>
                 </div>                                
              </div>              
            </div>            
          </div>
        </div>
        <!--Mapa -->        


              <!--Mapa -->
<!--                  <div class="mapa-big">
                   <div class="container">
                     <div class="row">
                      
                      <div class="col-md-6 col-12">
                          <div class="Mapa_info">
                            <ul class="Mapa_info-options">
                              <li href="#tab-1" data-rel="#Mapa_1" class="Mapa_info-button active Opcion_rionegro">RIONEGRO</li>
                              <li href="#tab-2" data-rel="#Mapa_2" class="Mapa_info-button Opcion_berrio">PUERTO BERRÍO</li>
                            </ul>
                            <section  class="Mapa_info-description">
                              <div id="tab-1">
                                <h4 class="Mapa_info-title">Datos de Contacto en Rionegro</h4>
                                <address>
                                    <a href="tel:+573124567834" class="Contact_section">
                                        <i class="fas fa-map-marker-alt Contact_icon" aria-hidden="true"></i>KM 1 Via Rionegro el Carmen de Viboral
                                    </a>
                                    <a href="https://web.whatsapp.com/send?phone=573136893524" target="_blank" class="Contact_section">
                                        <i class="fa fa-phone Contact_icon" aria-hidden="true"></i> 313 689 3524 

                                    </a>
                                    <a href="mailto:dcmserviciosyconsultoria@hotmail.com" class="Contact_section Contact_mail">
                                        <i class="fas fa-envelope Contact_icon" aria-hidden="true"></i> info@dcmservicios.com
                                    </a>                                                
                                </address>                    

                              </div>
                              <div id="tab-2">
                                <h4 class="Mapa_info-title">Datos de Contacto en Puerto Berrío</h4>
                                <address>
                                    <a href="" class="Contact_section">
                                        <i class="fas fa-map-marker-alt Contact_icon" aria-hidden="true"></i>Puerto Berrío -Antioquia
                                    </a>
                                    <a href="https://web.whatsapp.com/send?phone=573136893524" target="_blank" class="Contact_section">
                                        <i class="fa fa-phone Contact_icon" aria-hidden="true"></i> 313 689 3524
                                    </a>
                                    <a href="mailto:info@dcmservicios.com" class="Contact_section Contact_mail">
                                        <i class="fas fa-envelope Contact_icon" aria-hidden="true"></i> info@dcmservicios.com
                                    </a>                                                
                                </address>                     
                              </div>                  
                            </section>              
                          </div>
                      </div>

                      <div class="col-md-6 col-12">
                        <div class="mapa-container">
                           <div id="Mapa_1" class="Mapa">
                              
                           </div>
                           <div id="Mapa_2" class="Mapa Mapa-2">
                              
                           </div>
                         </div>
                      </div> 
            
                     </div>
                   </div>
                 </div> -->

                  <!--Mapa -->

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
                function initMap() {
                  var rionegro = {lat: 6.151940, lng: -75.367545};
                  var berrio = {lat: 6.490766, lng: -74.414384};

                  var map = new google.maps.Map(document.getElementById('Mapa_1'), {
                    zoom: 16,
                    center: rionegro
                  });
                  var map2 = new google.maps.Map(document.getElementById('Mapa_2'), {
                    zoom: 17,
                    center: berrio
                  });

                  var marker = new google.maps.Marker({
                    position: rionegro,
                    map: map
                  });
                  var marker2 = new google.maps.Marker({
                    position: berrio,
                    map: map2
                  });
                }
            </script>
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8UIpiwNoQW-6rYaw7jHtMVPZIL2ibMDo&callback=initMap">
            </script>

            <script type="text/javascript">
              // set content on click
                $('.Mapa_info-button').click(function(e) {
                    e.preventDefault();
                    setContent($(this));
                });

                // set content on load
                $('Mapa_info-button.active').length && setContent($('.Mapa_info-button.active'));

                function setContent($el) {
                    $('.Mapa_info-button').removeClass('active');
                    $('.Mapa').hide();
                    
                    $el.addClass('active');
                    $($el.data('rel')).show();
                }
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