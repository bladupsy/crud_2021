<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: system-ui;
}
.row {
    margin-top: 12px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 15px;
  resize: vertical;

}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  float: right;
  max-width: 95px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=cancel] {
  background-color: #FF8B72;;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  float: right;
  margin-right: 12px;
  max-width: 95px;
  
}

input[type=cancel]:hover {
  background-color: #FF8B72;;
}

.container {
  border-radius: 15px;
  background-color: #f2f2f2;
  padding: 20px;
  max-width: 720px;
  margin-top: 24px;
  margin: auto;
}

.center-container {
    margin: auto;
    max-width: 720px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.rounded {

}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>

<body>



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
                          <input type="submit" value="Aceptar" name="save_task">
                          <input type="cancel" value="Cancelar" onclick="location.href='../index.php'">
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