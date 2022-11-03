<html _lang_="en">
<head>
   <meta _charset_="UTF-8">
   <meta _http-equiv_="X-UA-Compatible" _content_="IE=edge">
   <meta _name_="viewport" _content_="width=device-width, initial-scale=1.0">
   <title>Tienda online</title>
</head>
<body>
<?php include ("nav.php") ?>
  

   <h1 class="text-center mt-3">Libros</h1>
        
       <h3 class="text-center mt-3">Ver el libro</h3>

       <section> 
   <div class="row">
   <div class="btn-group">
  <a href="libro.php?producto=hp3" class="btn btn-info">Harry Potter 3</a>
  <a href="libro.php?producto=hp1" class="btn btn-info">Harry Potter 1</a>
  <a href="libro.php?producto=hp7" class="btn btn-info">Harry Potter 7</a>
</div>
   
   <?php
   if(isset($_GET['producto'])){
       switch($_GET['producto']){
           case 'hp3':
               $nombre = 'Harry Potter 3';
               $titulo = 'El prisionero de Azkaban';
               $autor = 'ROWLING, J. K.' ;
               $sipnosis = 'De la prisión de Azkaban se ha escapado un terrible villano, Sirius Black, un asesino en serie que fue cómplice de lord Voldemort y que, dicen los rumores, quiere vengarse de Harry por haber destruido a su maestro.';
               $img = './img/harry_potter_y_el_prisionero_de_azkaban.jpg';
               break;
            case 'hp1':   
               $nombre = 'Harry Potter';
               $titulo = 'La piedra filosofal';
               $autor = 'ROWLING, J. K.';
               $sipnosis = 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y del insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vida para siempre. En ella le comunican que ha sido aceptado como alumno en el colegio interno Hogwarts de magia y hechicería.';
               $img = './img/harry_potter_y_la_piedra_filosofal.jpg';
               break;
            case 'hp7':   
               $nombre = 'Harry Potter';
               $titulo = 'Las reliquias de la muerte';
               $autor = 'ROWLING, J. K.';
               $sipnosis = 'Harry tiene que realizar una tarea siniestra, peligrosa y aparentemente imposible: el de localizar y de destruir a Horcruxes. Harry nunca se sintió tan sólo ni se enfrentó a un futuro tan incierto. Pero Harry debe encontrar la fuerza necesaria para terminar la tarea que le han dado';
               $img = './img/harry_potter_y_las_reliquias_de_la_muerte.jpg';
               break;
                }
   
   ?>   
        

<div class="card" style="width: 25rem; ">
<img src="<?php echo $img ?>" alt="">
  <div class="card-body">
  <h2> <?php echo $nombre; ?> </h2>
       <h3>
           <?php
           echo $titulo;
           ?>
       </h3>
       <h4>
           <?php
           echo $autor;
           ?>
       </h4>

       <h5>
           <?php
           echo $sipnosis;
           ?>
       </h5>
  </div>
</div>
</div> 
</section>

<?php } ?>


</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
