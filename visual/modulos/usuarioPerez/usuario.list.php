<?php require_once 'visual/templates/templatesPerez/Header.php'; ?>

<!-- main-->
<main class="container pb-5">

  <a href="index.php?c=usuario&f=nuevo">Crear nuevo Usuario</a>

  <div class="cabecera">
    <h2>Lista de Usuarios</h2>
  </div>

  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>BIRTHDAY</th>
        <th>NATIONALITY</th>
        <th>PASSWORD</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($results as $row) {
      ?>
      <tr>
        <td><?php echo $row['id_user'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['birthday'] ?></td>
        <td><?php echo $row['nationality'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td>
          <!-- Passing "id" with value of id_user -->
          <!-- update -->
          <a href="index.php?c=usuario&f=editar&id=<?php echo $row['id_user'] ?>">Actualizar</a>
          <!-- delete -->
          <a onclick="if(!confirm('Esta seguro de eliminar el contacto de id: <?php echo $row['id_user']; ?>?'))return false;"
            href="index.php?c=usuario&f=eliminar&id=<?php echo $row['id_user']; ?>">Eliminar</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

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