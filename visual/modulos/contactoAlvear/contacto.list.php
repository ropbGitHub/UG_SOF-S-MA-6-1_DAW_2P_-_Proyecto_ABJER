<?php require_once 'visual/templates/templatesAlvear/Header.php'; ?>

<div class="datatable-container">
    <!-- <div class="header-tools">
        <div class="tools">
            <ul>
                <li><span><input type="checkbox"></span></li>
                <li>
                    <button>
                        <i class="material-icons">add_circle</i>
                    </button>
                </li>
                <li>
                    <button>
                        <i class="material-icons">edit</i>
                    </button>
                </li>
                <li>
                    <button>
                        <i class="material-icons">delete</i>
                    </button>
                </li>
            </ul>
        </div>
        <div class="search">
            <input type="text" name="" id="" class="search-input">
        </div>
    </div> -->

    <table class="datatable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cédula </th>
                <th>Nombre </th>
                <th>Correo </th>
                <th>Telefono </th>
                <th>Fecha Disponible </th>
                <th>Motivo </th>
                <th>Acciones </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            foreach ($resultados as $fila) {
                ?>
            <tr>
                <td><?php echo $fila['ID_CONTACTO'];?></td>
                <td><?php echo $fila['cedula'];?></td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['correo'];?></td>
                <td><?php echo $fila['telefono'];?></td>
                <td><?php echo $fila['fechaDisponible'];?></td>
                <td><?php echo $fila['descripcion'];?></td>
                <td>
                    <a href="index.php?c=contacto&f=editar&id=<?php echo  $fila['ID_CONTACTO']; ?>"><i class="material-icons">edit</i></a>
                    <a onclick="if(!confirm('Esta seguro de eliminar el contacto?'))return false;"  href="index.php?c=contacto&f=eliminar&id=<?php echo  $fila['ID_CONTACTO']; ?>"><i class="material-icons">delete</i></a>
                </td>
            </tr>
            <?php  }?>
        </tbody>
    </table>
</div>

<?php require_once 'visual/templates/templatesAlvear/Footer.php'; ?>