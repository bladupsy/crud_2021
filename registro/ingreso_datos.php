<?php include("css_datos.php") ?>

<body>


<!-- Formulario de Registro de datos, guarda los datos a partir de save_task -->
<div class="container">
    <div class="center-container">
          <div><h2>Registro</h2></div>

            <form action="../save_task.php" method="POST">
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
                          <button class="button button1"  name="save_task">Aceptar</button>
                          <input type="cancel" value="Cancelar" onclick="location.href='../index.php'">
                  </div>
            </form>

        </div>
        

</div>

</body>