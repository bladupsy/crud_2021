
<?php include('includes/header_date.php'); ?>
<?php include("db.php"); ?>



<body>



<div class="container">
    <div class="center-container">
          <div><h2>Registro</h2></div>

            <form action="save_task.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="cuit">CUIT</label>
                    </div>
                    <div class="col-75">
                        <input type="text"  name="cuit" placeholder="Escriba su CUIT..">
                    </div>
                </div>
                <div class="row">
                     <div class="col-25">
                          <label for="fname" class="rounded">Nombre</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="nombre" placeholder="Escriba su nombre..">
                    </div>

                </div>
                  <div class="row">
                      <div class="col-25">
                          <label for="lname">Apellido</label>
                      </div>
                      <div class="col-75">
                         <input type="text" id="lname" name="apellido" placeholder="Escriba su apellido..">
                     </div>
                  </div>
                  <div class="row">
                      <div class="col-25">
                         <label for="celular">Teléfono</label>
                      </div>
                      <div class="col-75">
                         <input type="text" id="celular" name="telefono" placeholder="Escriba su número de teléfono..">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-25">
                             <label for="subject">Correo Electrónico</label>
                        </div>
                      <div class="col-75">
                             <input type="text" id="email" name="email" placeholder="Escriba su correo electrónico..">
                      </div>
                  </div>
                  <div class="row">
                          <input type="submit" value="Aceptar" name="save_task">
                          <input type="cancel" value="Cancelar">
                  </div>
            </form>

        </div>
        
<!--/* Para que muestre el mensaje de guardado */-->
      <?php if(isset($_SESSION['message'])) { ?>
        <div class="w3-panel w3-green">
        <?= $_SESSION['message'] ?>
        </div>
      <?php session_unset(); } ?>
</div>

</body>


<?php include('includes/footer_date.php'); ?>