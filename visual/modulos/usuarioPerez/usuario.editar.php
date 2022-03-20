<?php require_once 'visual/templates/templatesPerez/Header.php'; ?>

<!-- main-->
<main class="container pb-5">

  <div class="cabecera">
    <h2>Registro de Usuario</h2>
  </div>

  <form class="row align-items-center" id="form_user" method="POST" action="index.php?c=usuario&f=editar">

    <div class="row justify-content-center pb-5">
      <!-- id -->
      <input class="formulario-control" id="id" name="id" type=" hidden" value=" <?php echo $row['id_user']; ?>" />
      <!-- username -->
      <div class="col-md-4">
        <label class="form-label" for="username">Nombre de usuario</label>
        <input class="form-control" id="username" name="username" type="text"
          value=" <?php echo $row['username']; ?>" />
      </div>
      <!-- email -->
      <div class="col-md-4">
        <label class="form-label" for="email">Correo electrónico</label>
        <input class="form-control" id="email" name="email" type="email" value=" <?php echo $row['email']; ?>" />
      </div>
    </div>

    <div class="row justify-content-center pb-5">
      <!-- birthday -->
      <div class="col-md-4">
        <label class="form-label" for="birthday">Fecha de nacimiento</label>
        <input class="form-control" id="birthday" name="birthday" type="date"
          value=" <?php echo $row['birthday']; ?>" />
      </div>
      <!-- nationality -->
      <div class="col-md-4">
        <label class="form-label" for="nationality">Nacionalidad (opcional)</label>
        <!-- <input id="date" type="date" /> -->
        <select class="form-select" id="nationality" name="nationality">
          <?php
          $selected = $row['nationality'];
          $options = array('-- Seleccione --', 'Ecuatoriano', 'Peruano', 'Colombiano');
          echo "<select name='nationality'>";
          foreach ($options as $option) {
            if ($selected == $option) {
              echo "<option selected='selected' value='$option'>$option</option>";
            } else {
              echo "<option value='$option'>$option</option>";
            }
          }
          echo
          "</select>";
          ?>
      </div>
    </div>

    <div class="row justify-content-center pb-5">
      <!-- password1 -->
      <div class="col-md-4">
        <label class="form-label" for="password1">Contraseña: </label>
        <input class="form-control" id="password1" name="password1" type="password"
          value=" <?php echo $row['password']; ?>" />
      </div>

      <!-- password2 -->
      <div class="col-md-4">
        <label class="form-label" for="password2">Confirmar contraseña: </label>
        <input class="form-control" id="password2" name="password2" type="password"
          value=" <?php echo $row['password']; ?>" />
      </div>
    </div>

    <div class="row justify-content-center pt-3">
      <div class="d-grid gap-2 col-4 mx-auto">
        <!-- send -->
        <button class="btn btn-outline-primary btn-lg" id="button_send" type="submit" value="save">Enviar</button>
        <!-- cancel -->
        <a class="btn btn-outline-primary btn-lg" id="button_cancel" href="index.php?c=usuario&f=index">Cancelar</a>
      </div>
    </div>

  </form>
</main>

<?php require_once 'visual/templates/footer.php'; ?>

<!-- Bootstrap JS: Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="assets/js/PerezRenan.js"></script>

</body>

</html>