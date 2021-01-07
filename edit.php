<?php
include("db.php");

$cuit = '';
$nombre= '';
$apellido= '';
$telefono= '';
$email= '';

if  (isset($_GET['cuit'])) {
  $cuit = $_GET['cuit'];
  $query = "SELECT * FROM task WHERE cuit=$cuit";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $cuit = $row['cuit'];
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $telefono = $row['telefono'];
    $email = $row['email'];
  }
}

if (isset($_POST['update'])) {
  $cuit = $_GET['cuit'];
  $nombre= $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];


  $query = "UPDATE task set nombre = '$nombre', apellido = '$apellido' telefono = '$telefono' email= '$email' WHERE cuit=$cuit";
  mysqli_query($conn, $query);
  
}

?>
<?php include('registro/css_datos.php'); ?>
<div class="container">
    <div class="center-container">
          <div><h2>Modificación de Datos</h2></div>

            <form action="edit.php?cuit=<?php echo $_GET['cuit']; ?>" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="cuit">CUIT</label>
                    </div>
                    <div class="col-75">
                        <input type="text"  name="cuit"  value="<?php echo $cuit; ?>" placeholder="Actualizar CUIT..">
                    </div>
                </div>
                <div class="row">
                     <div class="col-25">
                          <label for="fname" class="rounded">Nombre</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="nombre" <?php echo $nombre;?> placeholder="Actualice su nombre..">
                    </div>

                </div>
                  <div class="row">
                      <div class="col-25">
                          <label for="lname">Apellido</label>
                      </div>
                      <div class="col-75">
                         <input type="text" id="lname" name="apellido"  <?php echo $apellido;?> placeholder="Actualice su apellido..">
                     </div>
                  </div>
                  <div class="row">
                      <div class="col-25">
                         <label for="celular">Teléfono</label>
                      </div>
                      <div class="col-75">
                         <input type="text" id="celular" name="telefono" value="<?php echo $telefono; ?>" placeholder="Actualice el número de teléfono..">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-25">
                             <label for="subject">Correo Electrónico</label>
                        </div>
                      <div class="col-75">
                             <input type="text" id="email" name="email" <?php echo $email;?> placeholder="Actualice su correo electrónico..">
                      </div>
                  </div>
                  <div class="row">
                          <button class="button button1"  name="">Aceptar</button>
                          <input type="cancel" value="Cancelar" onclick="location.href='index.php'">
                  </div>
            </form>

        </div>
        

</div>
