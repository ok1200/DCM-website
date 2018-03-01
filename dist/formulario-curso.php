<form action="libs/process.php" class="f-contact-form" enctype="multipart/form-data">
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
    <input type="text" name="nombre" value="" class="form-control Form_input" id="nombre" placeholder="Carolina Montenegro">

    <label class="Form_label Label-email" for="email">Email</label>
    <input type="email" name="email" value="" class="form-control Form_input" id="email" placeholder="carolinamontenegro@gmail.com">

    <label class="Form_label Label-telefono" for="telefono">Teléfono</label>
    <input type="number" name="telefono" value="" class="form-control Form_input" id="telefono" placeholder="312 728 38 14">

    <small class="Campos-necesarios">*Todos los campos son necesarios</small>

    <input type="checkbox" class="Check_input" name="check"  aria-label="Checkbox"><label for="check" class="Check_label"> Acepto<a href="" target="_blank" class="Check_input Check_input-link">política de tratamiento de datos</a></label>
    

    <input id="submit" class="Button Button_form" type="submit" value="Enviar">
</form>