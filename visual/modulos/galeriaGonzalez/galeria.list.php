<?php require_once 'visual/templates/templatesGonzalez/Header.php'; ?>

<h2>Galeria ABJER RESERVA

<div class="datatable-container">
    <div class="header-tools">
        <div class="tools">
            <ul>
                <li>
                    <a href="index.php?c=galeria&f=nuevo"> 
                        <button><i class="material-icons">add_circle</i></button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="search">
            <form action="index.php?c=galeria&f=buscar" method="POST">
                <input class="search-input" type="text" name="busqueda" id="busqueda"  placeholder="buscar..."/>
                <button type="submit"><i class="material-icons">search</i></button>
            </form> 
        </div>
    </div>

    <table class="datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>SALON</th>
                <th>FECHA DE EVENTO</th>
                <th>CANTIDAD DE PERSONAS</th>
                <th>SERVICIOS</th>
                <th>NIÑOS</th>
                <th>SUGERENCIA</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            
            foreach ($resultados as $fila) {
                ?>
            <tr>
                <td><?php echo $fila['ID_reservacion'] ?></td>
                <td><?php echo $fila['username'] ?></td>
                <td><?php echo $fila['Nombre'] ?></td>
                <td><?php echo $fila['Fecha_evento'] ?></td>
                <td><?php echo $fila['cantmaxPer'] ?></td>
                <td><?php echo $fila['Servicios'] ?></td>
                <td><?php echo $fila['ninios'] ?></td>
                <td><?php echo $fila['sugerencia'] ?></td>
                <td>
                <td>
                        <a onclick="if(!confirm('Esta seguro de eliminar?'))return false;"  href="index.php?c=galeria&f=eliminar&id=<?php echo  $fila['ID_reservacion']; ?>"><i class="material-icons">delete</i></a>
                </td>
                </td>
            </tr>
            <?php  }?>
        </tbody>
    </table>
</div>

<?php require_once 'visual/templates/templatesGonzalez/Footer.php'; ?>