<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load these Stylesheets dynamic with the wp_head-function (adds also necessary wp-stylesheets) -->
    <!-- Bootstrap CSS -->
    <!-- Custom CSS -->
    <!-- Font Awesome -->
    <?php wp_head(); ?>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-md ms-4">
      <a class="navbar-brand" href="#"><img src="img/alles-theurer-logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">
              <button type="button" class="btn btn-outline-light">Home</button>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Klavierunterricht.html">
              <button type="button" class="btn btn-outline-light">Klavierunterricht</button>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Schlagzeugunterricht.html">
              <button type="button" class="btn btn-outline-light">Schlagzeugunterricht</button>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Kontakt.html">
              <button type="button" class="btn btn-outline-light">Kontakt</button>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  
  <!-- PIANO STRIPE -->
  <section class="piano">
    <div class="container-fluid p-0">
      <img class ="w-100" src="img/piano_stripe_small.jpg" alt="">
    </div>
  </section>