<?php require_once 'visual/templates/Header.php'; ?>

<main class="main_form">
        <p class="par_formulario">Contáctese con Nosotros</p>
        <br />
        <form class="formulario" id="formulario">
          <!-- Grupo: Cedula -->
          <div class="formulario__grupo" id="grupo__cedula">
            <label for="cedula" class="formulario__label">Cédula *</label>
            <div class="formulario__grupo-input">
              <input
                type="text"
                class="formulario__input"
                name="cedula"
                id="cedula"
                placeholder="0999999992"
              />
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">
              La cédula tiene que ser de 10 dígitos y solo puede contener numeros.
            </p>
          </div>

          <!-- Grupo: Nombre -->
          <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre *</label>
            <div class="formulario__grupo-input">
              <input
                type="text"
                class="formulario__input"
                name="nombre"
                id="nombre"
                placeholder="Billy Alvear"
              />
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">
              El nombre tiene que ser de 4 a 16 caracteres y solo puede contener letras.
            </p>
          </div>

          <!-- Grupo: Fecha -->
          <div class="formulario__grupo" id="grupo__fecha">
            <label for="fecha" class="formulario__label">Fecha</label>
            <div class="formulario__grupo-input">
              <input
                type="date"
                class="formulario__input"
                name="fecha"
                id="fecha"
              />
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Elija una fecha para contactarlo.</p>
          </div>

          <!-- Grupo: Motivo -->
          <div class="formulario__grupo" id="grupo__motivo">
            <label for="motivo" class="formulario__label">Motivo</label>
            <div class="formulario__grupo-input">
              <select id="motivo" name="motivo" class="formulario__input">
                <option value="0">Cotización</option>
                <option value="1">Reconocimiento</option>
                <option value="2">Trabajo</option>
                <option value="3">Documentación</option>
              </select>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Elija un motivo de contacto.</p>
          </div>

          <!-- Grupo: Correo Electronico -->
          <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Correo Electrónico *</label>
            <div class="formulario__grupo-input">
              <input
                type="email"
                class="formulario__input"
                name="correo"
                id="correo"
                placeholder="correo@correo.com"
              />
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">
              El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
            </p>
          </div>

          <!-- Grupo: Teléfono -->
          <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Teléfono *</label>
            <div class="formulario__grupo-input">
              <input
                type="text"
                class="formulario__input"
                name="telefono"
                id="telefono"
                placeholder="4491234567"
              />
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">
              El teléfono tiene que ser de 10 dígitos y solo puede contener numeros.
            </p>
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
              <i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el
              formulario correctamente.
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

<!-- incluimos  pie de pagina -->
<?php require_once 'visual/templates/Footer.php'; ?>