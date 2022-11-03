<html _lang_="en">
<head>
   <meta _charset_="UTF-8">
   <meta _http-equiv_="X-UA-Compatible" _content_="IE=edge">
   <meta _name_="viewport" _content_="width=device-width, initial-scale=1.0">
   <title>Tienda online</title>
</head>
<body>
<?php include ("nav.php") ?>
  

   <h1 class="text-center mt-3">Mangas</h1>

        
       <h3 class="text-center mt-3">Vea el Manga</h3>

       <section> 
   <div class="row">
   <div class="btn-group">
  <a href="manga.php?producto=at" class="btn btn-info">Ataque a los Titanes</a>
  <a href="manga.php?producto=ev" class="btn btn-info">Evangelion</a>
  <a href="manga.php?producto=na" class="btn btn-info">Naruto</a>
</div>
   
   <?php

   if(isset($_GET['producto'])){
       switch($_GET['producto']){
           case 'at':
               $nombre = 'Ataques a los titanes';
               $sipnosis = 'La humanidad se vio obligada a esconderse tras enormes muros para no convertirse en alimento de los Titanes. De esta manera los seres humanos pudieron volver a conocer la paz y la prosperidad. Eren Jaeger es un joven que sueña con el mundo exterior, hastiado del conformismo con el que la humanidad vive encerrada como si fuese ganado. La repentina llegada del Titán Colosal, que supera la altura del muro, aplasta la ilusión de paz en la que hasta ahora vivía la sociedad humana.';
               $img = './img/ataques a los titanes.jpg';
               break;
            case 'ev':   
               $nombre = 'Evagelion';
               $sipnosis = 'La historia de la obra se da lugar en un mundo futurista en el que una organización paramilitar llamada NERV protege a la humanidad de los ataques de seres de origen y naturaleza desconocidos, los «Ángeles», utilizando para ello bio mechas humanoides llamados Evangelion (acortado a EVA).';
               $img = './img/evangelion.jpg';
               break;
            case 'na':   
               $nombre = 'Naruto';
               $sipnosis = 'La obra narra la historia de un ninja huérfano adolescente llamado Naruto Uzumaki, cuyos padres murieron en el ataque del Zorro Demonio de Nueve Colas, y quien aspira a convertirse en Hokage (líder de su aldea) con el propósito de ser reconocido como alguien importante dentro de la aldea y entre sus compañeros.';
               $img = './img/naruto.jpg';
               break;
                }
   
   ?>   
        

<div class="card" style="width: 25rem; ">
<img src="<?php echo $img ?>" alt="">
  <div class="card-body">
  <h2> <?php echo $nombre; ?> </h2>
       <h3>
           <?php
           echo $sipnosis;
           ?>
       </h3>
  </div>
</div>
</div> 
</section>

<?php } ?>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
