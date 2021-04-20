<?php get_header(); ?>

  <header>
      <div class="container-md rounded mt-5 p-5">
          <div class="row align-items-center justify-content-center">
              <div class="col-lg-4 text-center">
                  <img class="m-4 rounded-circle" src="img/martin_square.jpg" alt="">
              </div>
              <div class="col-md-8">
                <h2>Martin Theurer</h2>
                <p>als Kind und Jugendlicher begann ich Geige, Trompete, Klavier und Kichenorgel zu spielen. Heute spiele ich hauptsächlich Klavier und Schlagzeug.</p>
              </div>
          </div>
      </div>
  </header>

  <!-- TRIAL LESSON -->
  <section class="trial_lesson">
    <div class="container-fluid mt-5 bg-dark p-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-xl-6 col-xxl-5 text-center">
          <i class="fas fa-coins mb-4"></i>
          <h1 class="mb-4">Kostenlose Probestunde</h1>
          <p>Aufnahmebedingungen gibt es nicht. Es sind sowohl Anfänger wie Fortgeschrittene willkommen.
             Auch eine Altersbegrenzung besteht nicht. In einer kostenlosen Probestunde können gerne
             Einzelheiten besprochen werden.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- INSTRUMENTS -->
  <section class="instruments m-5">
    <div class="container">
      <div class="row text-center">
        <h1>Instrumente</h1>
      </div>
      <div class="row">
        <div class="col m-4 p-4 text-center rounded">
          <h2 class="mb-3">Klavier</h2>
          <img src="img/piano-top-view.svg" alt="piano-top-view">
          <p class="m-4">
            Für den Klavierunterricht benutze ich als Basis zwei eigene Klavierschulen
          </p>
        </div>
        <div class="col m-4 p-4 text-center rounded">
          <h2 class="mb-3">Schlagzeug</h2>
          <img src="img/drummer.svg" alt="">
          <p class="m-4">
            Für den Schlagzeugunterricht benutze ich ebenfalls eine eigene Klavierschule
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Place -->
  <section class="place">
    <div class="container-fluid mt-5 bg-dark p-5 mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-md-12 col-xl-10 col-xxl-6 mt-0 m-4 p-4">
          <i class="fas fa-map-marker-alt mb-4"></i>
          <h1>Mitten in Witten</h1>
          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe class="w-100 h-100" src="https://maps.google.com/maps?q=germany-witten-roehrchenstraße-24&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>