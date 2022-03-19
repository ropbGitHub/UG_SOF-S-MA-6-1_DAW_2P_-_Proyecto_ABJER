<?php require_once 'visual/templates/templatesMatamoros/Header.php'; ?>

<main class="main_form">
  <p class="par_formulario">AGREGAR PREGUNTA</p>
  <br />
  <form action="index.php?c=qa&f=editar" method="POST" class="formulario" id="formulario">
    
    <!--ID_OCULTO-->
        <input type="hidden" class="formulario__input" name="id" id="id" value="<?php echo $prod['id']; ?>"/>

    <!-- Grupo: NOMBRE -->
    <div class="formulario__grupo" id="grupo__nombre">
      <label for="nombre" class="formulario__label">NOMBRE *</label>
      <div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Fernando" />
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Este campo y solo puede contener letras.</p>
    </div>

    <!-- Grupo: APELLIDO -->
    <div class="formulario__grupo" id="grupo__apellido">
      <label for="apellido" class="formulario__label">APELLIDO *</label>
      <div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Matamoros" />
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Este campo y solo puede contener letras.</p>
    </div>

    <!-- Grupo: CATEGORIA -->
    <div class="formulario__grupo" id="grupo__categoria">
      <label for="categoria" class="formulario__label">CATEGORIA *</label>
      <div class="formulario__grupo-input">
        <select id="categoria" name="cbxCategoria" class="formulario__input">
            <option value="Seleccione">Seleccione</option>
            <option value="Binaria">Binaria</option>
            <option value="Categorica">Categorica</option>
            <option value="Informativa">Informativa</option>
        </select>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <!--  -->
      <p class="formulario__input-error">Elija una categoria.</p>
    </div>

      <!-- Grupo: PREGUNTA -->
      <div class="formulario__grupo" id="grupo__pregunta">
      <label for="pregunta" class="formulario__label">PREGUNTA *</label>
      <div class="formulario__grupo-input">
        <textarea class="formulario__input" name="txaPregunta" id="pregunta" rows=6 cols=50 placeholder="¿De qué color son las paredes?"></textarea>
        <br>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
            <!-- <p class="formulario__input-error">Debe tener un máximo de 15 palabras.</p> -->
    </div>

      <!-- Grupo: RESPUESTA -->
      <div class="formulario__grupo" id="grupo__respuesta">
      <label for="respuesta" class="formulario__label">RESPUESTA *</label>
      <div class="formulario__grupo-input">
        <textarea class="formulario__input" name="txaRespuesta" id="respuesta" rows=6 cols=50 placeholder="Las paredes son azules :3"></textarea>
        <br>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
            <!-- <p class="formulario__input-error">Debe tener respuesta.</p> -->
    </div>

        <!-- Grupo: TIPO_PREGUNTA -->
        <div class="formulario__grupo" id="grupo__tipoPregunta">
      <label for="tipoPregunta" class="formulario__label">TIPO PREGUNTA *</label>
      <div class="formulario__grupo-input">
        <input type="radio" class="formulario__input" name="tipoPregunta" id="tipoPregunta" value="Espacio">Espacio<br/>
        <input type="radio" class="formulario__input" name="tipoPregunta" id="tipoPregunta" value="Precio">Precio<br/>
        <input type="radio" class="formulario__input" name="tipoPregunta" id="tipoPregunta" value="Otros">Otros<br/>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
            <!-- <p class="formulario__input-error">Seleccione un tipo.</p> -->
    </div>

    <!-- Grupo: Terminos y Condiciones -->
    <div class="formulario__grupo" id="grupo__terminos">
      <label class="formulario__label">
        <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos" />
        Acepto los Terminos y Condiciones *
      </label>
    </div>

    <div class="formulario__mensaje" id="formulario__mensaje">
      <p>
        <i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente.
      </p>
    </div>

    <div class="formulario__grupo formulario__grupo-btn-enviar">
      <button type="submit" class="formulario__btn">Enviar</button>
      <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">
        Formulario enviado exitosamente!
      </p>
    </div>
  </form>
</main>
</div> <!-- class="agrupar" tag close -->

<!-- footer -->
<?php require_once 'visual/templates/templatesMatamoros/Footer.php'; ?>