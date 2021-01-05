
<body>


<div>
    <div>
         <h2>Registro de personas</h2>
        
        <div class="col-75" >
                <button onclick="location.href='registro/ingreso_datos.php'" class="button button1"> Agregar </button>
        </div>
        
    </div>

    <div>
        <table id="customers">
                <tr>
                    <th>CUIT</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th></th>
                    
                
                </tr>
                <tbody>
                <?php
                 $query = "SELECT * FROM task";
                $result_task =  mysqli_query($conn, $query );
                 
                while($row = mysqli_fetch_array($result_task)) { ?>

                    <tr>
                        <td><?php echo $row['cuit'] ?> </td>
                        <td><?php echo $row['nombre'] ?> </td>
                        <td><?php echo $row['apellido'] ?> </td>
                        <td><?php echo $row['telefono'] ?> </td>
                        <td><?php echo $row['email'] ?> </td>
                        <td>
                            <input type="image" src="recursos/edit.png" href="edit.php?cuit=<?php echo $row['cuit']?> ">
                            
                            <input type="image" src="recursos/delete.png" href="delete.php?cuit=<?php echo $row['cuit']?> ">
                            
                        </td>
                    </tr>

                    
                <?php } ?>
            
                </tbody>
        
        </table>
   


    </div>


</div>
<!--EL CSS DEL INDEX ESTA EN header_date */-->

</body>
