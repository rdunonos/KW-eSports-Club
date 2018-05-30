@extends('layout.mainlayout')
<!DOCTYPE html>
<html lang="en">
  



    <div class="container">
      <div class="titol">
      <img src="img/kwesportsclub.png" height="250"/>
      <h1>KW ESPORTS CLUB</h1> 
      <button type="button" id="button-principal" class="btn btn-primary active" href="https://twitter.com/KWeSportsClub?lang=es" target="_blank">Síguenos!</button>
    </div>
    <!--llamamos a la plantilla slider-->
    @include('layout.partials.slider')


      <h1 class="my-4"></h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Sobre Nosotros</h4>
            <div class="card-body">
              <p class="card-text">Somos KW eSports Club, un proyecto empezado de 0 por una jugadora que dijo basta. Nacidos del mal rollo y la discriminación sexista, estamos preparados para luchar...</p>
            </div>
            <div class="card-footer">
              <a href="nosotros" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Última noticia</h4>
            <div class="card-body">
              <p class="card-text">Nos vamos a Gamergy!<br>Los equipos de League of Legends, Hearthstone y Arena of Valor vamos a este gran evento situado en Madrid. Los 15 jugadores que forman estas squads residiremos en una casa alquilada para sentirnos más unidos que nunca. Atentos a las fotos y notícias del 22 al 25 de</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Último partido</h4>
            <div class="card-body">
              <p class="card-text">El último 23 de Mayo el equipo de League of Legends se enfrentó al temido OKGG con una conclusión igualada, 1-1. Después de este empate en la última jornada de la Liga Española de Lol, nuestros chicos quedan terceros de la primera divisón. Más suerte en la próxima! #GOKW</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<!--
    Footer 
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>

      /.container 

    </footer>

    Bootstrap core JavaScript 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
  </body>

</html>
