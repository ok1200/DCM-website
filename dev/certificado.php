<!doctype html>
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
        <title>Validar Certificado</title>
        <meta name="description" content="Curso Avanzado en Trabajo Seguro en Alturas, en Antioquia para trabajadores que realicen trabajo en alturas con riesgo de caída y que realice desplazamientos horizontales, verticales y la técnica de suspensión,  con una duración de 40 horas.">
        <link rel="shortcut icon" href="img/favicon.ico">

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
  <body class="Body_Certificado">
      <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="Contacto_form-title" id="exampleModalLongTitle">Solicita tu Certificado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php require 'formulario-certificado.php';?>
              </div>
            </div>
          </div>
        </div>
        <!--Modal -->
    <div class="Container-certificado">
      <div class="container">
        <div class="Busqueda-certificado">
        <div class="Cabecera">
          <a href="index.php" target="_blank"><img src="img/DCM-Logotipo@2x.png" class="Logo-dcm" alt=""></a>
          <h2 class="Display-3">Validar Certificado</h2>
          <p class="Busqueda-certificado_text">Ingresa el número de cédula para validar si<br>existen certificados relacionados</p>
          
        </div>
        <form role="form" method="POST" class="row Busqueda-certificado_row">
          <div class="col-lg-5 offset-lg-2 col-md-8">
            <div class="form-group Busqueda-group">
              <label for="documento" class="Cedula_label">NÚMERO DE CÉDULA</label>
              <input type="text" class="form-control Cedula_input" name="documento" placeholder="Ingrese una identificación" required>
              <small class="Ejemplo-cedula">* Ingresa el número sin puntos o comas, ejemplo: 1039234567 </small> 
            </div>
            
          </div>
          <div class="col-lg-2 col-12 Center-button_certificado">
            <button class="Button Busqueda-certificado_btn" type="submit">Buscar</button>
          </div>    
        </form>

      
          <?php 

          if ($_POST) {
            require_once 'config.php';
            $con = Conectar();
            $id = $_POST['documento'];
            $SQL = 'SELECT * FROM informacion WHERE cedula = :doc';

            $stmt = $con->prepare($SQL);
            $result = $stmt->execute([
                'doc' => $id
            ]);

            $rows = $stmt ->fetchAll(PDO::FETCH_OBJ);

            ?>
                  <style>
                  @media (max-width: 1400.98px){
                      .Container-certificado{
                        height: auto;
                        padding: 20px 0;
                      }                    

                  }
                  </style>
                  <div class="Exito-texto">
                    <div data-aos="fade-up" data-aos-duration="1400">
                      <p class="Display-4">Consulta Exitosa</p> <i class="far fa-check-circle"></i>
                      <p class="Busqueda-certificado_text mb-3">Revisa la información de los certificados relacionados con el <br> documento, en el siguiente cuadro:</p>                  
                    </div>
                  </div>
                
                <div class="row Resultado-positivo_row">
                  <div class="col-lg-10 offset-lg-1 col-12 pb-1">
                <table class="table table-dark text-center pb-5" data-aos="fade-up" data-aos-duration="1700">
                  <thead class="Thead">
                    <tr>
                      <th scope="col">CÉDULA</th>
                      <th scope="col">NOMBRE </th>
                      <th scope="col">CERTIFICADO</th>
                      <th scope="col">EXPEDICIÓN</th>
                      <th scope="col">VENCIMIENTO</th>
                      <th scope="col">PDF</th>
                    </tr>
                  </thead>
                  <tbody class="Tbody">

                    
            <?php 

            if (count($rows)){
              foreach ($rows AS $row){
                ?>

                    

                    <tr>
                      <td><?php echo $row->cedula; ?></td>
                      <td><?php echo $row->nombre; ?></td>
                      <td><?php echo $row->certificado; ?></td>
                      <td><?php echo $row->expedicion; ?></td>
                      <td><?php echo $row->vigencia; ?></td>
                      <td><a class="Descarga-certificado" data-toggle="modal" data-target="#exampleModalCenter">
                        Solicitar</a>
                      </td>
                    </tr>

              <?php

              }
            } else {

             
             require 'busqueda-negativa.php';

            }
            
          }

           ?>
                  </tbody>
                </table>
                </div> 

              </div>  
          

            </div>
          </div>

      </div>

  

            <!-- AOS css -->
            <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
            <!-- Fontawesome -->
            <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
            
            <!-- jQuery first, then Tether, then Bootstrap JS. -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
             <!--then Bootstrap JS. -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
            <!-- AOS javascript -->
            <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

            <!-- Our javascript -->
            <script type="text/javascript" src="js/all.js"></script>
  </body>
</html>