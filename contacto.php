<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <?php include("nav.php")
    ?>

    <section class="contacto-contenido">
    <form class="row position-absolute top-50 start-50 translate-middle bg-info border border-opacity-50 border-dark p-2 text-dark bg-opacity-25" action="enviar_consulta.php" method="POST" >
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="text"  name="nombre" class="form-control"  placeholder="Nombre" required>
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Apellido</label>
  <input type="text"  name="apellido" class="form-control"  placeholder="Apellido" required>
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
  <input type="email"  name="correo" class="form-control"  placeholder="nombre@ejemplo.com" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Escribir Mensaje</label>
  <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-outline-info">Enviar</button>
</div>

</form>
<?php
if (isset($_GET['e'])){
    echo '<div class="alert alert-primary" role= "alert">
    <div>
   Mensaje enviado
  </div>
  </div>';
} 
?>
</section>



</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>