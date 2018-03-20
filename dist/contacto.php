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
        <title>DCM Servicios y Consultoría - Cursos de Alturas</title>
        <meta name="description" content="DCM posee actualmente dos sedes con centros de entrenamiento avalados en el departamento de Antioquia. Contactanos en los teléfonos 313 689 35 24 - 314 483 8386 o al correo dcmserviciosyconsultoria@hotmail.com; o visitanos en nuestras sedes.">
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
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

                <?php $page = "contacto"; require('menu.php');?>
              <!-- Artículo header -->
                    <h1 class="Galeria_title Contacto_title">CONTÁCTANOS</h1>
                      <!--Contacto form -->
                  <div class="Contacto_form">
                    <div class="container">
                      <h3 class="Contacto_form-title">Escríbenos un mensaje</h3>
                    <div class="row Contacto_form-row">
                      <div class="col-md-5 col-12 Contacto_form-col">
                              
                        <?php require 'formulario-contacto.php'; ?>

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
              <div class="col-lg-7 col-12">
                <div class="mapa-container">
                   <div id="Mapa_1" class="Mapa">               
                   </div>
                 </div>                                
              </div>
              <div class="col-lg-4 col-12 offset-lg-1 offset-0 Contacto-info">
                <h4 class="Contacto-sede_title"> <i class="fas fa-map-marker-alt Contacto-icon_title"></i>RIONEGRO</h4>
                <small class="Sede_numero">SEDE 1</small>
                <ol class="mb-0"">
                  <li class="Contacto-info_title">Dirección <small class="Contacto-info_description">KM 1 Via Rionegro el Carmen de Viboral</small></li>
                  <a href="tel:+573235816956">
                      <li class="Contacto-info_title">Teléfono <small class="Contacto-info_description">323 581 6956 - 531 4404</small></li>
                  </a>
                  <a href="mailto:contacto@dcmservicios.com">
                     <li class="Contacto-info_title">Email <small class="Contacto-info_description">contacto@dcmservicios.com</small></li>
                  </a>
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
              <div class="col-lg-4 col-12 Contacto-info">
                <h4 class="Contacto-sede_title"> <i class="fas fa-map-marker-alt Contacto-icon_title"></i>PUERTO BERRÍO</h4>
                <small class="Sede_numero">SEDE 2</small>
                <ol class="mb-0">
                  <li class="Contacto-info_title">Dirección <small class="Contacto-info_description">KM 1 Via La Malena</small></li>
                  <a href="tel:+573136893524">
                      <li class="Contacto-info_title">Teléfono <small class="Contacto-info_description">323 581 6956</small></li>
                  </a>
                  <a href="mailto:contacto@dcmservicios.com">
                     <li class="Contacto-info_title">Email <small class="Contacto-info_description">contacto@dcmservicios.com</small></li>
                  </a>
                </ol>
                
              </div>
              <div class="col-lg-7 col-12 offset-lg-1 offset-0">
                <div class="mapa-container">
                   <div id="Mapa_2" class="Mapa">               
                   </div>
                 </div>                                
              </div>              
            </div>            
          </div>
        </div>
        <!--Mapa -->        

        <!-- Footer! -->
          <?php require 'footer.php'; ?>

        <!-- Footer! -->

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

            <script>
                function initMap() {
                  var rionegro = {lat: 6.144297, lng: -75.352806};
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
    </body>
</html>