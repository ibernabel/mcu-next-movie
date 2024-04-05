<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesion de CURL; ch = CURL handle
$ch = curl_init(API_URL);

// indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutarla petiicion
y guardaar el resultado
*/
$result = curl_exec($ch);
$data = json_decode($result, true);

# Cerrar la conexion CURL; php es muy loquillo!
curl_close($ch);

?>

<!--<pre>
  <?= var_dump($data); ?>
</pre>-->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MCU Next Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <header class="container text-center ">
      <h1 class="display-5">La Proxima pelicula de Marvel</h1>
    </header>
    <section class="d-flex justify-content-center">
      <div class="card shadow " style="width: 18rem;">
        <img src="<?= $data["poster_url"] ?>" class="card-img-top" alt="Poster de la pelicula <?=  $data["title"] ?>">
        <div class="card-body">
          <h5 class="card-title"><?=  $data["title"] ?></h5>
          <p class="card-text"><?=  $data["overview"] ?></p>
          <p>Fecha de estreno: <?=  $data["release_date"] ?></p>
          <p>Solo faltan  <?=  $data["days_until"] ?> días. </p>
          <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
        </div>
      </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

