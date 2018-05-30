
@extends('layout.mainlayout')

<!DOCTYPE html>
<html>
<head>
	<title>
		League of Legends
	</title>
	<!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
</head>
<body>

    <div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">League of Legends</h1>

      <h3 class="my-4">Competiciones
        <small>activas</small>
      </h3>
      <ul>
      <li>
      	<p>Liga Española de League of Legends</p>
      </li>
      <li>
      	<p>Rising League</p>
      </li>
      </ul>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Nuestro Equipo</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/Hakki.jpg" alt="">
          <h3>Helena "Hakkira"
            <small>Coach</small>
          </h3>
          <p>Coach y manager del club.</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/Exter.jpg" alt="">
          <h3>Roger "Exter"
            <small>Jugador</small>
          </h3>
          <p>ADC</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/Sonike.jpg" alt="">
          <h3>Joaquin "Ds J04QU1N"
            <small>Jugador</small>
          </h3>
          <p>Jungla</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/1.jpg" alt="">
          <h3>Alberto "lManiatic"
            <small>Jugador</small>
          </h3>
          <p>Support</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/Dade.jpg" alt="">
          <h3>Dani "Kaol"
            <small>Jugador</small>
          </h3>
          <p>Top</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/Monchu.jpg" alt="">
          <h3>Ramón "Monchu"
            <small>Jugador</small>
          </h3>
          <p>Mid</p>
        </div>
      </div>

    </div>

</body>
</html>