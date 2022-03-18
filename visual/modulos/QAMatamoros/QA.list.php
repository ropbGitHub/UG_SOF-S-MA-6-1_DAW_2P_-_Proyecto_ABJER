<?php require_once 'visual/templates/templatesMatamoros/Header.php'; ?>

<h2>Questions&Answers ABJER AUN NO FUNCIONA</h2>

<div class="datatable-container">
    <div class="header-tools">
        <div class="tools">
            <ul>
                <li>
                    <a href="index.php?c=cotizar&f=nuevo"> 
                        <button><i class="material-icons">add_circle</i></button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="search">
            <form action="index.php?c=cotizar&f=buscar" method="POST">
                <input class="search-input" type="text" name="busqueda" id="busqueda"  placeholder="buscar..."/>
                <button type="submit"><i class="material-icons">search</i></button>
            </form> 
        </div>
    </div>

    <table class="datatable">
        <thead>
            <tr>
                <th>ID </th>
                <th>Nombre </th>
                <th>correo </th>
                <th>cantidad de persona(s) </th>
                <th>fechaEvento </th>
                <th>tipo de salon </th>
                <th>tipo de servicio(s) </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            foreach ($resultados as $fila) {
                ?>
            <tr>
                <td><?php echo $fila['ID_COTIZACION'];?></td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['correo'];?></td>
                <td><?php echo $fila['cantidadPersona'];?></td>
                <td><?php echo $fila['fechaEvento'];?></td>
                <td><?php echo $fila['tipoSalonEvento'];?></td>
                <td><?php echo $fila['tipoServicioEvento'];?></td>
                <td>
                    <a href="index.php?c=cotizar&f=editar&id=<?php echo  $fila['ID_COTIZACION']; ?>"><i class="material-icons">edit</i></a>
                    <a onclick="if(!confirm('Esta seguro de eliminar esta cotización?'))return false;"  href="index.php?c=cotizar&f=eliminar&id=<?php echo  $fila['ID_COTIZACION']; ?>"><i class="material-icons">delete</i></a>
                </td>
            </tr>
            <?php  }?>
        </tbody>
    </table>
</div>

<?php require_once 'visual/templates/templatesMatamoros/Footer.php'; ?>