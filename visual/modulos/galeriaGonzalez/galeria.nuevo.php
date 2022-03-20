<?php require_once 'visual/templates/templatesGonzalez/Header.php'; ?>



<main class="main_form">
  <p class="par_formulario">AGREGAR PREGUNTA</p>
  <br />
  <form action="index.php?c=qa&f=nuevo" method="POST" class="formulario" id="formulario">
    

    <div class="formulario__grupo" id="grupo__cantidad">
      <label for="cantidad" class="formulario__label">Cantidad de personas *</label>
      <div class="formulario__grupo-input">
        <input type="number" class="formulario__input" name="cantidad" id="cantidad" min=1 />
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Este campo solo puede contener numeros.</p>
    </div>

   <!-- Grupo: servicios -->
   <div class="formulario__grupo" id="grupo__servicios">
      <label class="formulario__label">   Tipo de servicio    </label>
      <input type="checkbox" class="formulario__checkbox"  name="Decoracion" id="deco">Decoracion  
      <input type="checkbox" class="formulario__checkbox"  name="Buffet" id="buffet">Buffet 
      <input type="checkbox" class="formulario__checkbox"  name="Iluminación" id="iluminacion">Iluminación
      <input type="checkbox" class="formulario__checkbox"  name="AudioVi" id="AudioVi">Audio y video 

    </div>

    <div class="formulario__grupo" id="grupo__fecha">
    
      <label for="eventoF"  class="formulario__label">Fecha del Evento *<b class="error" id="eventoF-error"></b> </label>
      <div class="formulario__grupo-input">
      <input type="date" id="eventoF"name="eventoF"/>
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>

      <p class="formulario__input-error">Elija un salon.</p>
    </div>


    <div class="formulario__grupo" id="grupo__salon">
      <label for="salon" class="formulario__label">Salon *</label>
      <div class="formulario__grupo-input">
        <select id="salon" name="cbxsalon" class="formulario__input">
            <option value="Seleccione">Seleccione</option>
            <option value="0">Salon Victoria</option>
                            <option value="1">Salon Piccaddily</option>
                            <option value="2">Salon bristol</option>
                            <option value="3">Salon Vista</option>
        </select>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>

      <p class="formulario__input-error">Elija un salon.</p>
    </div>

     

   <div class="formulario__grupo" id="grupo__respuesta">
      <label for="respuesta" class="formulario__label">Añada sugerencias o detalles acerca de la reservación *</label>
      <div class="formulario__grupo-input">
        <textarea class="formulario__input" name="respuesta" id="respuesta" rows=2 placeholder="DETALLES DE RESERVA"></textarea>
        <br>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
            
    </div> 

      
    <div class="formulario__grupo" id="grupo__tipoPregunta">
      <label for="tipoPregunta" class="formulario__label">¿Ingreso de niños?  *</label>
      <div class="formulario__grupo-input">
        <input type="radio" class="formulario__input" name="tipoPregunta" id="tipoPregunta" value="Si">Si<br/>
        <input type="radio" class="formulario__input" name="tipoPregunta" id="tipoPregunta" value="No">No<br/>

        <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
           
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
<?php require_once 'visual/templates/templatesGonzalez/Footer.php'; ?>
