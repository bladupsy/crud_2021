
<?php 
include("db.php");



if (isset($_POST['cuit'])) {
    $cuit = $_POST['cuit'];
    echo "Se va a eliminar el registro de esta persona " .$cuit;
    
    $query = "DELETE FROM  task WHERE cuit = $cuit')";
    $result = mysqli_query($conn, $query);
    
   

    if(!result) {
        die("Falló");


    }

    
}

?>