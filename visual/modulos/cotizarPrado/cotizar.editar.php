<?php require_once 'visual/templates/templatesPrado/Header.php'; ?>

<main>
  <div class="contenedor">
    <div class="gale">
      <!-- section-->
      <section class="section">
        <h2 class="h2prado">Formulario de Cotizacion</h2>
        <form action="index.php?c=cotizar&f=editar" method="POST" class="bloque_formulario_prado" id="formulario_cotizacion">
        <input type="hidden" name="id1" value="<?php echo $fila['ID_COTIZACION'] ?>"><br />
          <!-- Nombre -->
          <div class="row">
            <label> Ingrese su nombre:</label><br />
            <input class="texto_formulario_prado" type="text" id="idNombre" name="nombre" value="<?php echo $fila['nombre'] ?>" /><br />
          </div>
          <!-- apellido -->
          <div class="row">
            <label> Ingrese su apellido:</label><br />
            <input class="texto_formulario_prado" type="text" id="idApellido" name="apellido" value="<?php echo $fila['apellido'] ?>" /><br />
          </div>
          <!-- correo electronico -->
          <div class="row">
            <label> Ingrese su correo electronico:</label><br />
            <input class="texto_formulario_prado" type="email" id="idEmail" name="email" value="<?php echo $fila['email'] ?>" /><br />
          </div>
          <!-- cantidad de personas -->
          <div class="row">
            <label>
              Ingrese la cantidad de personas (por cuestiones de la pandemia, se redució el
              aforo):</label><br />
            <input class="texto_formulario_prado" type="number" id="idCantidadPer" name="cantidad_per" value="<?php echo $fila['cantidadPersona'] ?>" min="1" max="30" /><br />
          </div>
          <!-- fecha del evento -->
          <div class="row">
            <label> Seleccione la fecha del evento:</label><br />
            <input class="texto_formulario_prado" type="date" id="idFecha" name="fecha" value="<?php echo $fila['fecha'] ?>"/><br />
          </div>
          <!-- tipo de salon -->
          <div class="row">
            <label>Seleccione el tipo de salón para el evento:</label><br />
            <input type="radio" name="radSalon" <?php if (($fila['salon']) == 'Victoria') { echo "checked";} ?> value="Victoria">Victoria<br />
            <input type="radio" name="radSalon" <?php if (($fila['salon']) == 'Vista') {echo 'checked';} ?> value="Vista">Vista<br />
            <input type="radio" name="radSalon" <?php if (($fila['salon']) == 'Picaddily') {echo 'checked';} ?> value="Picaddily">Picaddily<br />
            <input type="radio" name="radSalon" <?php if (($fila['salon']) == 'Bristol') {echo 'checked';} ?> value="Bristol">Bristol<br />
          </div>
          <!-- servicios del evento -->
          <div class="row">
            <div>
              <label>Seleccione los servicios para el evento:</label><br/>
              <?php $chktSer = explode(",", $fila['servicio']) ?>
              <input type="checkbox" name="tipoSer[]" <?php if (in_array("Decoración", $chktSer)) {echo 'checked';} ?> value="Decoración">Decoración<br />
              <input type="checkbox" name="tipoSer[]" <?php if (in_array("Buffet", $chktSer)) {echo 'checked';} ?> value="Buffet">Buffet<br />
              <input type="checkbox" name="tipoSer[]" <?php if (in_array("Iluminación", $chktSer)) {echo 'checked';} ?> value="Iluminación">Iluminación<br />
              <input type="checkbox" name="tipoSer[]" <?php if (in_array("Audio y Video", $chktSer)) {echo 'checked';} ?> value="Audio y Video">Audio y Video<br />
            </div>
          </div>
          <!-- Boton enviar -->
          <div class="row">
            <div>
              <input type="submit" class="boton_enviar_prado" value="Enviar" />
            </div>
          </div>
        </form>
        <!-- <form id="formulario_cotizacion" class="bloque_formulario_prado"></form> -->
      </section>
    </div>
  </div>
</main>
</div> <!-- class="agrupar" tag close -->

<!-- footer -->
<?php require_once 'visual/templates/footer.php'; ?>

<!-- Enlance externo al JavaScript de Prado -->
<script src="assets/js/Andres_Prado.js"></script>
</body>

</html>