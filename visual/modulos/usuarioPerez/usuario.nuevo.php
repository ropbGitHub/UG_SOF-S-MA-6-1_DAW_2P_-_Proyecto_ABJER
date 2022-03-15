<?php require_once 'visual/templates/templatesPerez/Header.php'; ?>

<!-- main-->
<main>
  <div class="container mt-5">
    <div class="cabecera">
      <h2>Registro de Usuario</h2>
    </div>

    <form class="row g-3" id="formulario">
      <!-- Nombre de usuario -->
      <div class="form-control col-md-6">
        <label for="usuario">Nombre de usuario</label>
        <input id="usuario" type="text" />
        <p></p>
      </div>

      <!-- E-mail -->
      <div class="form-control">
        <label for="email">E-mail</label>
        <input id="email" type="email" />
        <p></p>
      </div>

      <!-- Fecha Nacimiento -->
      <div class="form-control">
        <label for="date">Fecha de nacimiento</label>
        <input id="date" type="date" />
        <p></p>
      </div>

      <!-- Nacionalidad -->
      <div class="form-control">
        <label for="country">Nacionalidad (opcional)</label>
        <!-- <input id="date" type="date" /> -->
        <select name="country" id="country">
          <option value="0">N/A</option>
          <option value="1">Ecuador</option>
          <option value="2">Perú</option>
          <option value="3">Venezuela</option>
          <option value="4">Chile</option>
        </select>
        <p></p>
      </div>

      <!-- Password -->
      <div class="form-control">
        <label for="pass">Password</label>
        <input id="pass" type="password" />
        <p></p>
      </div>

      <!-- Confirmar Password -->
      <div class="form-control">
        <label for="passConfirma">Confirmar Password</label>
        <input id="passConfirma" type="password" />
        <p></p>
      </div>

      <div class="btn">
        <button class="btn-form">Enviar</button>
      </div>
    </form>

    <form action="./index.html">
      <button id="btn-form">Canceler/Regresar</button>
    </form>
  </div>
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