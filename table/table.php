
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
                $result_tasks =  mysqli_query($conn, $query );
                 
                while($row = mysqli_fetch_array($result_tasks)) { 
                    echo "<tr></tr>" . 
                    echo "<tr><td>" . 
                    $row["cuit"] . "</td>";
                echo "<td>" . 
                    $row["nombre"] . "</td>";
                echo "<td>" . 
                    $row["apellido"] . "</td>";
                echo "<td>" . 
                    $row["telefono"] . "</td>";
            
                echo "<td>" . 
                    $row["email"]. "</td>";
                        
                            <a href="edit.php?cuit=<?php echo $row['cuit']?> ">
                           Edit
                            </a>

                            <a href="delete_task.php?cuit=<?php echo $row['cuit']?> ">
                                Eliminar
                            </a>
                            
                        </td>
                    </tr>

                    
                 } ?>
            
                </tbody>
        
        </table>
   


    </div>


</div>
<!--EL CSS DEL INDEX ESTA EN header_date */-->

</body>
