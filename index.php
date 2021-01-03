
<?php include('includes/header_date.php'); ?>



<body>



<div class="container">

    <div><h2>Registro</h2></div>

  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="cuit">CUIT</label>
      </div>
      <div class="col-75">
        <input type="text" id="ct" name="number" placeholder="Escriba su CUIT..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname" class="rounded">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Escriba su nombre..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Apellido</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Escriba su apellido..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="celular">Teléfono</label>
      </div>
      <div class="col-75">
        <input type="text" id="celular" name="phone" placeholder="Escriba su número de teléfono..">
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
      <input type="submit" value="Aceptar">
      <input type="cancel" value="Cancelar">
    </div>
  </form>
</div>

</body>


<?php include('includes/footer_date.php'); ?>