<!doctype html>
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
        <title>Buscar Certificado</title>
        <meta name="description" content="Curso Avanzado en Trabajo Seguro en Alturas, en Antioquia para trabajadores que realicen trabajo en alturas con riesgo de caída y que realice desplazamientos horizontales, verticales y la técnica de suspensión,  con una duración de 40 horas.">
        <!-- AOS css -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <!-- Fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" rel="stylesheet">

        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.1/flexslider.css" rel="stylesheet">        

        <link rel="stylesheet" href="css/libraries.css">

        <!-- Our css -->
        <link rel="stylesheet" href="css/main.css">
    </head>
  <body>
    <div class="Container-certificado">
  <div class="container">
    <div class="Cabecera">
      <img src="img/DCM-Logo.png" class="Logo-dcm" alt="">
      <h2 class="Display-3">Validar Certificado</h2>
      <p>Ingresa tu número de cédula y busca tu certificado en nuestro sistema</p>
      
    </div>
    <form role="form" method="POST" >
      <div class="form-group">
        <label for="exampleInputEmail1">Cédula:</label>
        <input type="text" class="form-control" name="documento" placeholder="Ingrese una identificación" required>
      </div>

        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>

  
      <?php 

      if ($_POST) {
        require_once 'config.php';
        $con = Conectar();
        $id = $_POST['documento'];
        $SQL = 'SELECT * FROM inormacion WHERE cedula = :doc';

        $stmt = $con->prepare($SQL);
        $result = $stmt->execute([
            'doc' => $id
        ]);

        $rows = $stmt ->fetchAll(PDO::FETCH_OBJ);

        ?>

            <table class="table table-dark text-center animated fadeIn delay-5">
              <thead>
                <tr>
                  <th scope="col">Cédula</th>
                  <th scope="col">Nombre </th>
                  <th scope="col">Certificado</th>
                  <th scope="col">Expedición</th>
                  <th scope="col">Vigencia</th>
                  <th scope="col">Descargar</th>
                </tr>
              </thead>
              <tbody>

                
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
                  <td><a href="<?php echo $row->descargar;?>" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                </tr>

          <?php

          }
        } else {
          echo "<h1 class='mt-5'>Aún no tienes certificados para descargar</h1>";
          echo "<style>.table { display:none;}</style>";

        }
        
      }

       ?>
              </tbody>
            </table>      
      
      </div>

  </div>

  


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