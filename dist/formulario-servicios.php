<form action="libs/process-servicios.php" class="f-contact-form" enctype="multipart/form-data" data-aos="fade-left">
    <label class="Form_label" for="servicio">Servicio</label>
    <select id="servicio" class="form-control Form_input form-control-lg" name="servicio">
      <option <?php if ($servicio == 1 ) echo 'selected' ;?> value="Capacitacion-Bomberotecnia" >CAPACITACIÓN BOMBEROTECNIA</option>
      <option <?php if ($servicio == 2 ) echo 'selected' ;?> value="Diseño-Planes-de-Emergencia" >DISEÑO PLANES DE EMERGENCIA</option>
      <option <?php if ($servicio == 3 ) echo 'selected' ;?> value="Capacitacion-Trabajo-en-Espacios-Confinados" >CAPACITACIÓN TRABAJO EN ESPACIOS CONFINADOS</option>
      <option <?php if ($servicio == 4 ) echo 'selected' ;?> value="Evaluacion-Puestos-de-Trabajo" >EVALUACIÓN PUESTOS DE TRABAJO</option>
      <option <?php if ($servicio == 5 ) echo 'selected' ;?> value="Diseño-de-Matriz-de-Peligro" >DISEÑO DE MATRIZ DE PELIGRO</option>
      <option <?php if ($servicio == 6 ) echo 'selected' ;?> value="Capacitacion-Primer-Respondiente" >CAPACITACIÓN PRIMER RESPONDIENTE</option>
      <option <?php if ($servicio == 7 ) echo 'selected' ;?> value="Capacitacion-Brigadas-de-Emergencias" >CAPACITACIÓN BRIGADAS DE EMERGENCIAS</option>
      <option <?php if ($servicio == 8 ) echo 'selected' ;?> value="Investigacion-de-Accidentes-de-Trabajo" >INVESTIGACIÓN DE ACCIDENTES DE TRABAJO</option>
      <option <?php if ($servicio == 9 ) echo 'selected' ;?> value="Inspeccion-de-Equipos-de-Alturas" >INSPECCIÓN DE EQUIPO DE ALTURAS</option>
      <option <?php if ($servicio == 10 ) echo 'selected' ;?> value="Plan-Seguridad-Vial" >PLAN SEGURIDAD VIAL</option>
      <option <?php if ($servicio == 11 ) echo 'selected' ;?> value="Asesoria-Seguridad-y-Salud-en-el-Trabajo" >ASESORÍA SEGURIDAD Y SALUD EN EL TRABAJO</option>
      <option <?php if ($servicio == 12 ) echo 'selected' ;?> value="Sistema-Seguridad-y-Salud-en-el-Trabajo" >SISTEMA SEGURIDAD Y SALUD EN EL TRABAJO</option>

    </select>    

    <label class="Form_label" for="nombre">Nombre</label>
    <input required type="text" name="nombre" value="" class="form-control Form_input" id="nombre" placeholder="Carolina Montenegro">

    <label class="Form_label" for="email">Email</label>
    <input required type="email" name="email" value="" class="form-control Form_input" id="email" placeholder="carolinamontenegro@gmail.com">

    <label class="Form_label" for="telefono">Teléfono</label>
    <input required type="number" name="telefono" value="" class="form-control Form_input" id="telefono" placeholder="312 728 38 14">

    <label class="Form_label" for="telefono">Empresa <span>(opcional)</span></label>
    <input required type="text" name="empresa" value="" class="form-control Form_input" id="empresa" placeholder="Seguridad SAS">
    <small class="Campos-necesarios">*Todos los campos son necesarios</small>

    <input id="submit" class="Button Button_form" type="submit" value="Consultar">

</form>