
<?php include('includes/header_date.php'); ?>
<?php include("db.php"); ?>
/* EL CSS DEL INDEX ESTA EN header_date */
    <div><h2>Registro de personas</h2></div>
      
    <div class= "col-75">
        <button onclick="location.href='registro/ingreso_datos.php'" class="button button1"> Agregar </button>
    </div>

<?php include('table/table.php'); ?>



<?php include('includes/footer_date.php'); ?>