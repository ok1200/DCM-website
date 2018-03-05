<?php
    require 'PHPMailerAutoload.php';
    $action=$_REQUEST['action'];
   
    if ($action==""){
            ?>
            <!-- Campos del formulario editables -->
            <form  action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="action" value="submit"> <br><br>

            <label class="Form_label Label-curso" for="curso">Curso</label>
            <select id="curso" class="form-control Form_input form-control-lg" name="curso">
              <option <?php if ($curso == 1 ) echo 'selected' ;?> value="Basico-Administrativo" >BÁSICO ADMINISTRATIVO</option>
              <option <?php if ($curso == 2 ) echo 'selected' ;?> value="Basico-Operativo" >BÁSICO OPERATIVO</option>
              <option <?php if ($curso == 3 ) echo 'selected' ;?> value="Avanzado" >AVANZADO</option>
              <option <?php if ($curso == 4 ) echo 'selected' ;?> value="Reentrenamiento" >REENTRENAMIENTO</option>
              <option <?php if ($curso == 5 ) echo 'selected' ;?> value="Coordinador" >COORDINADOR</option>
              <option <?php if ($curso == 6 ) echo 'selected' ;?> value="Armado-Desarmado-Andamios" >ARMADO Y DESARMADO DE ANDAMIOS</option>
            </select>

            <label class="Form_label Label-nombre" for="nombre">Nombre</label>
            <input type="text" name="nombre" value="" class="form-control Form_input" id="nombre" placeholder="Carolina Montenegro" required>

            <label class="Form_label Label-email" for="email">Email</label>
            <input type="email" name="email" value="" class="form-control Form_input" id="email" placeholder="carolinamontenegro@gmail.com" required>

            <label class="Form_label Label-telefono" for="telefono">Teléfono</label>
            <input type="number" name="telefono" value="" class="form-control Form_input" id="telefono" placeholder="312 728 38 14" required>

            <small class="Campos-necesarios">*Todos los campos son requeridos</small>

            <input type="checkbox" class="Check_input" name="check"  aria-label="Checkbox" required><label for="check" class="Check_label"> Acepto<a href="" target="_blank" class="Check_input Check_input-link">política de tratamiento de datos</a></label>
            
            <input id="submit" class="Button Button_form" type="submit" value="Inscribirme">
            
            </form>
            <?php
    }
    
  
    else{
        
        // Variables donde se guardan los datos del formulario 
        $curso=$_REQUEST['curso'];
        $nombre=$_REQUEST['nombre'];
        $telefono=$_REQUEST['telefono'];
        $email=$_REQUEST['email'];

           
            $mail = new PHPMailer;
        // Condicional de campos vacíos 
        if (($nombre=="")||($telefono=="")||($email=="")){
		    echo "Hay campos vacíos, por favor llenar los campos requeridos con * <a href=\"\">Volver</a>.";
	    }
	    else{	
	   
        
           
        
            //$mail->SMTPDebug = 4;                               // Habilitar el debug
            
            $mail->isSMTP();                                      // Usar SMTP
            $mail->Host = 'mail.dcmservicios.com';  //***EDITAR*** Especificar el servidor SMTP reemplazando por el nombre del servidor donde esta alojada su cuenta
            $mail->SMTPAuth = true;                               // Habilitar autenticacion SMTP
            $mail->Username = 'info@dcmservicios.com';             //***EDITAR*** Nombre de usuario SMTP donde debe ir la cuenta de correo a utilizar para el envio
            $mail->Password = 'wy3HLJFnss0E';              //***EDITAR*** Clave SMTP donde debe ir la clave de la cuenta de correo a utilizar para el envio
            $mail->SMTPSecure = 'ssl';                            // Habilitar encriptacion
            $mail->Port = 465;                                    // Puerto SMTP
            
            $mail->setFrom('info@dcmservicios.com');     //***EDITAR*** Direccion de correo remitente
            $mail->addAddress('dmanuell08@gmail.com'); //***EDITAR*** Agregar eldestinatario
            
            $mail->addBCC($email);                          // Direccion con copia del envío 
            
            $mail->addReplyTo('info@dcmservicios.com');     //***EDITAR*** Direccion de correo para respuestas
            
            $mail->isHTML(true);                                  // Habilitar contenido HTML
            
            $mail->Subject = 'Mensaje de ejemplo'; //***EDITAR*** Asunto del mensaje . No debe tener tildes o estar escrito todo en Mayusculas
            $mail->Body    ="Nueva Inscripción a Cursos <br><br> Curso: $curso <br> Nombre: $nombre <br> Teléfono: $telefono <br> Email: $email <br>"; // Contenido del mensaje.
            
            if(!$mail->send()) {
                echo 'El mensaje no pudo ser enviado';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo "El mensaje ha sido enviado";
            }
        
        }
          
    
	}
?>





