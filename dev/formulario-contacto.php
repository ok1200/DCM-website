<form action="libs/process-servicios.php" class="f-contact-form" enctype="multipart/form-data"> 

    <label class="Form_label" for="nombre">Nombre</label>
    <input required type="text" name="nombre" value="" class="form-control Form_input" id="nombre" placeholder="Carolina Montenegro">

    <label class="Form_label" for="email">Email</label>
    <input required type="email" name="email" value="" class="form-control Form_input" id="email" placeholder="carolinamontenegro@gmail.com">

    <label class="Form_label" for="telefono">Teléfono</label>
    <input required type="number" name="telefono" value="" class="form-control Form_input" id="telefono" placeholder="312 728 38 14">

    <label class="Form_label" for="mensaje">Mensaje</label>
    <textarea required type="text" name="mensaje" rows="2" cols="50" class="form-control Form_input" id="mensaje" placeholder="Escribe tu mensaje..."></textarea>
    <small class="Campos-necesarios">*Todos los campos son necesarios</small>

    <input type="checkbox" class="Check_input" name="check"  aria-label="Checkbox"><label for="check" class="Check_label"> Acepto<a href="" target="_blank" class="Check_input Check_input-link">política de tratamiento de datos</a></label>

    

    <div class="d-flex justify-content-center justify-content-md-start mt-5">
        <button id="submit" class="Button Busqueda-certificado_btn" value="Enviar" type="submit">Buscar</button>
    </div>

</form>