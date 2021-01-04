<?php 

include("db.php");

if (isset($_POST['save_task'])) {
    $cuit = $_POST['cuit'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
   

    $query = "INSERT INTO task(cuit, nombre, apellido, telefono, email) VALUES('$cuit', '$nombre', '$apellido', '$telefono', '$email')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Fallo");

    }
/* Mensaje de que se ha enviado la información a mysql */ 
    $_SESSION['message'] = 'Holaa';
    $_SESSION['message_type'] = 'green';
   header("Location: index.php");


}
?>