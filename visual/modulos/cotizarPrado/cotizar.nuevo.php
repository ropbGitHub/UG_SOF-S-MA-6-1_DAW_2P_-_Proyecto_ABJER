<?php require_once 'visual/templates/templatesPrado/Header.php'; ?>

<main>
  <div class="contenedor">
    <div class="gale">
      <!-- section-->
      <section class="section">
        <h2 class="h2prado">Formulario de Cotizacion</h2>
        <form action="index.php?c=cotizar&f=nuevo" method="post" class="bloque_formulario_prado" id="formulario_cotizacion">
          <!-- Nombre -->
          <div class="row">
            <label> Ingrese su nombre:</label><br />
            <input class="texto_formulario_prado" type="text" id="idNombre" name="nombre" placeholder="Nombre" /><br />
          </div>
          <!-- apellido -->
          <div class="row">
            <label> Ingrese su apellido:</label><br />
            <input class="texto_formulario_prado" type="text" id="idApellido" name="apellido"
              placeholder="Apellido" /><br />
          </div>
          <!-- correo electronico -->
          <div class="row">
            <label> Ingrese su correo electronico:</label><br />
            <input class="texto_formulario_prado" type="email" id="idEmail" name="email"
              placeholder="example@hotmail.com" /><br />
          </div>
          <!-- cantidad de personas -->
          <div class="row">
            <label>
              Ingrese la cantidad de personas (por cuestiones de la pandemia, se redució el
              aforo):</label><br />
            <input class="texto_formulario_prado" type="number" id="idCantidadPer" name="cantidad_per" placeholder="1"
              min="1" max="30" /><br />
          </div>
          <!-- fecha del evento -->
          <div class="row">
            <label> Seleccione la fecha del evento:</label><br />
            <input class="texto_formulario_prado" type="date" id="idFecha" name="fecha" /><br />
          </div>
          <!-- tipo de salon -->
          <div class="row">
            <label>Seleccione el tipo de salón para el evento:</label><br />
            <input class="form_salon" type="radio" name="radSalon" value="Victoria">Victoria<br />
            <input class="form_salon" type="radio" name="radSalon" value="Vista">Vista<br />
            <input class="form_salon" type="radio" name="radSalon" value="Picaddily">Picaddily<br />
            <input class="form_salon" type="radio" name="radSalon" value="Bristol">Bristol<br />
          </div>
          <!-- servicios del evento -->
          <div class="row">
            <div>
              <label>Seleccione los servicios para el evento:</label><br/>
              <input type="checkbox" name="tipoSer[]" value="Decoración">Decoración<br />
              <input type="checkbox" name="tipoSer[]" value="Buffet">Buffet<br />
              <input type="checkbox" name="tipoSer[]" value="Iluminación">Iluminación<br />
              <input type="checkbox" name="tipoSer[]" value="Audio y Video">Audio y Video<br />
            </div>
          </div>
          <!-- Boton enviar -->
          <div class="row">
            <div>
              <input type="submit" class="boton_enviar_prado" value="Enviar" />
            </div>
          </div>
        </form>
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