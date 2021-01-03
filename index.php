
<?php include('includes/header_date.php'); ?>



<body>



<div class="container">

    <div><h2>Registro</h2></div>

  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname" class="rounded">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Apellido</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Pais</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Descripción</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
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