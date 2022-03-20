<?php require_once 'visual/templates/templatesMatamoros/Header.php'; ?>

<h2>Questions&Answers ABJER MEDIO FUNCIONAL</h2>

<div class="datatable-container">
  <div class="header-tools">
    <div class="tools">
      <ul>
        <li>
          <a href="index.php?c=qa&f=nuevo">
            <button><i class="material-icons">add_circle</i></button>
          </a>
        </li>
      </ul>
    </div>
    <div class="search">
      <form action="index.php?c=qa&f=buscar" method="POST">
        <input class="search-input" type="text" name="busqueda" id="busqueda" placeholder="buscar..." />
        <button type="submit"><i class="material-icons">search</i></button>
      </form>
    </div>
  </div>

  <table class="datatable">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>CATEGORIA</th>
        <th>TIPO_PREGUNTA</th>
        <th>PREGUNTA</th>
        <th>RESPUESTA</th>
      </tr>
    </thead>
    <tbody>
      <?php

            foreach ($resultados as $fila) {
            ?>
      <tr>
        <td><?php echo $fila['id'] ?></td>
        <td><?php echo $fila['nombre'] ?></td>
        <td><?php echo $fila['apellidos'] ?></td>
        <td><?php echo $fila['categoria'] ?></td>
        <td><?php echo $fila['tipoPregunta'] ?></td>
        <td><?php echo $fila['pregunta'] ?></td>
        <td><?php echo $fila['respuesta'] ?></td>
        <td>
          <a href="index.php?c=qa&f=editar&id=<?php echo  $fila['id']; ?>"><i class="material-icons">edit</i></a>
          <a onclick="if(!confirm('Esta seguro de eliminar?'))return false;"
            href="index.php?c=qa&f=eliminar&id=<?php echo  $fila['id']; ?>"><i class="material-icons">delete</i></a>
        </td>
      </tr>
      <?php  } ?>
    </tbody>
  </table>
</div>

<?php require_once 'visual/templates/templatesMatamoros/Footer.php'; ?>