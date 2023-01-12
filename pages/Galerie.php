<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Galerie</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleNav.css">
    
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
         }
      }

      .card {
        position: static;
      }

    </style>

    
  <link rel="icon" type="image/png" href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/96/52769-spade-suit-icon.png">
</head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?php include 'Navbar.php'?>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Unsere schönsten Seiten</h1>
        <p class="lead text-muted">Hier finden Sie exklusive Einblicke in unser Hotel. Gefällt Ihnen was Sie sehen? Entdecken Sie unsere Optionen und buchen Sie einen Aufenhalt jetzt!</p>
        <p>
          <a href="Registrierung.php" class="btn btn-primary my-2">Jetzt registrieren!</a>
          <a href="Reservierung.php" class="btn btn-primary my-2">Jetzt einloggen und reservieren!</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <di v class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
          <div class="card shadow-sm">
          <img width="100%" height="225" src = "pics/Family.jpg"></img>

            <div class="card-body">
              <p class="card-text">Das ist unser Familienzimmer. Hier hat die ganze Familie Platz.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.open('pics/Family.jpg');">View</button>
            
                </div>
                <small class="text-muted">Aktuelles Foto</small>
              </div>
            </div>
          </div>
        </div>

        
        <div class="col">
          <div class="card shadow-sm">
          <img width="100%" height="225" src = "pics/pool.jpg"></img>

            <div class="card-body">
              <p class="card-text"> Bei unserem Pool kann man sich entspannen und den Alltag vergessen.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.open('pics/pool.jpg');">View</button>
                  
                </div>
                <small class="text-muted">Aktuelles Foto</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img width="100%" height="225" src = "pics/room.png"></img>

            <div class="card-body">
              <p class="card-text">Das ist unsere Deluxe-Suite mit Kingsize Bett und Whirlpool.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.open('pics/room.png');">View</button>
                  
                </div>
                <small class="text-muted">Aktuelles Foto</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img width="100%" height="300" src = "pics/fitness.jpg"></img>


            <div class="card-body">
              <p class="card-text">Das ist unser Fitnessraum. Wir bieten auch gratis Trainingsstunden an.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.open('pics/fitness.jpg');">View</button>
                  
                </div>
                <small class="text-muted">Aktuelles Foto</small>
              </div>
            </div>
          </div>
        </div>
        
       
        <div class="col">
          <div class="card shadow-sm">
          <img width="100%" height="300" src = "pics/spa.png"></img>

            <div class="card-body">
              <p class="card-text">Unser Hotel-Spa bietet viele verschiedene Massagen und Entspannungsoptionen an.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.open('pics/spa.png');">View</button>
                  
                </div>
                <small class="text-muted">Aktuelles Foto</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img width="100%" height="300" src = "pics/lobby.jpg" ></img>
            <div class="card-body">
              <p class="card-text">Unsere Hotel-Lobby mit großzügigem Aquarium ist immer ein echter Hingucker.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.open('pics/lobby.jpg');">View</button>
                  
                </div>
                <small class="text-muted">Aktuelles Foto</small>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <h3 style="text-align:center;">
      <a style="text-decoration:none;" href="#">&#9650;</a>
    </h3>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
