<?php
  include("../conexion/conexion_bd.php");
  include("../conexion/controlador_perfil.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peliculas</title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- OWL CAROUSEL -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
    />
    <!-- BOX ICONS -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- APP CSS -->
    <link rel="stylesheet" href="../css/grid.css" />
    <link rel="stylesheet" href="../css/movies.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>

  <body>

    
    <!-- NAV -->
    <!-- NAV -->
<div class="nav-wrapper">
  <div class="container">
    <div class="nav">
      <a href="#" class="logo">
        <img src="../images/logo.png" alt="logo" class="logo-img">
      </a>  
      <ul class="nav-menu" id="nav-menu">
        <li><a href="movies.php">HOME</a></li>
        <li><a href="movies.php">MOVIES</a></li>
        <li><a href="games.php">GAMES</a></li>    
      </ul>

      <!-- Íconos de Usuario y Búsqueda -->
      <div class="nav-icons">
        <!-- Ícono de Lupa -->
        <div class="search-icon" id="search-icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        
        <!-- Ícono de Usuario -->
        <div class="profile-icon">
            <img src="../images/perfil.jpg" alt="User" class="user-img" id="user-icon">
          </div>
      </div>

      <!-- Barra de búsqueda (oculta por defecto) -->
      <div class="search-bar" id="search-bar">
        <input type="text" placeholder="Buscar...">
        <button id="close-search"><i class="fa-solid fa-times"></i></button>
      </div>

      <!-- MENÚ DESPLEGABLE -->
      <form action="../conexion/controlador_perfil.php" method="POST">
        <div class="dropdown-menu" id="dropdown-menu" style="display: none;">
          <div class="user-info">
            <img src="../images/perfil.jpg" alt="User" class="user-img">
            <span class="user-name"><?php echo $user_name;?></span>
          </div>
          <hr class="divider">
          <ul>
            <button class="evelyn-btn" name="pefil-btn"><i class="fas fa-edit"></i> Edit Profile</button>
            <button class="danna-btn"><i class="fas fa-coins"></i> Tokens</button>
            <button class="dania-btn"><i class="fas fa-question-circle"></i> Help Center</button>
            <button class="valeria-btn"><i class="fas fa-sign-out-alt"></i> Logout</button>
          </ul>
        </div>
      </form>

      


      <!-- MENÚ PARA CELULAR -->
      <div class="hamburger-menu" id="hamburger-menu">
        <div class="hamburger"></div>
      </div>
      <!-- FIN MENÚ PARA CELULAR -->
    </div>
  </div>
</div>
<!-- FIN NAV -->



    <!-- HERO SECTION -->
      <div class="hero-section">
          <!-- HERO SLIDE -->
          <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
              <!-- PELICULA DEL SLIDE -->
              <div class="hero-slide-item">
                <img src="../images/wanda_banner.jpg" alt="" />
                <div class="hero-slide-item-content">
                  <div class="item-content-wraper">
                    <div class="item-content-title top-down">WandaVision</div>
                    <div class="item-content-description top-down delay-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
                      possimus eius. Deserunt non odit, cum vero reprehenderit
                      laudantium odio vitae autem quam, incidunt molestias ratione
                      mollitia accusantium, facere ab suscipit.
                    </div>
                    <button class="hero-button">WATCH NOW!</button>
                  </div>
                </div>
              </div>
              <!-- FIN PELICULA DEL SLIDE -->
               <!-- PELICULA DEL SLIDE -->
              <div class="hero-slide-item">
                <img src="../images/supergirl-banner.jpg" alt="" />
                <div class="hero-slide-item-content">
                  <div class="item-content-wraper">
                    <div class="item-content-title top-down">WandaVision</div>
                    <div class="item-content-description top-down delay-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
                      possimus eius. Deserunt non odit, cum vero reprehenderit
                      laudantium odio vitae autem quam, incidunt molestias ratione
                      mollitia accusantium, facere ab suscipit.
                    </div>
                    <button class="hero-button">WATCH NOW!</button>
                  </div>
                </div>
              </div>
              <!-- FIN PELICULA DEL SLIDE -->
               <!-- PELICULA DEL SLIDE -->
              <div class="hero-slide-item">
                <img src="../images/transformer-banner.jpg" alt="" />
                <div class="hero-slide-item-content">
                  <div class="item-content-wraper">
                    <div class="item-content-title top-down">WandaVision</div>
                    <div class="item-content-description top-down delay-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
                      possimus eius. Deserunt non odit, cum vero reprehenderit
                      laudantium odio vitae autem quam, incidunt molestias ratione
                      mollitia accusantium, facere ab suscipit.
                    </div>
                    <button class="hero-button">WATCH NOW!</button>
                  </div>
                </div>
              </div>
              <!-- FIN PELICULA DEL SLIDE -->
            </div>
          </div>  
          <!-- FIN HERO SLIDE -->
      </div>


    <!-- ULTIMAS PELICULAS -->
    <div class="section">
      <div class="container">
        <div class="section-header">Ultimas Peliculas</div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <!-- PELICULA -->
          <a href="view.php?movie=guardianes1" class="movie-item">
            <img src="../images/Guardianes de La Glaxia 1.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">Guardians of the Galaxy</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php?movie=guardianes2" class="movie-item">
            <img src="../images/Guardianes de la Galaxia 2.webp" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">Guardians of the Galaxy 2</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php?movie=guardianes3" class="movie-item">
            <img src="../images/Guardianes de la Galaxia 3.jpeg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">Guardians of the Galaxy 3</div>
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/series/the-falcon.webp" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">The-falcon</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/hangover.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">hangover</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/series/wanda.webp" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">WandaVision</div>
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/interstellar.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">interstellar</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/iron man.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">iron man</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/Nezha.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">Nezha</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/life.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">Life</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
        </div>
      </div>
    </div>
    <!-- FIN ULTIMAS PELICULAS -->


    <!-- SERIES POPULARES -->
    <div class="section">
      <div class="container">
        <div class="section-header">Series populares</div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/El gran Showman.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">El Gran Showman</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/capitan_america.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">Capitán América</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/hangover 3.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">Hangover 3</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/interstellar.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">interstellar</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/La Serpiente Verde.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">La Serpiente Verde</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/movies/life.jpg" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">Life</div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
          <!-- PELICULA -->
          <a href="view.php" class="movie-item">
            <img src="../images/series/the-falcon.webp" alt="" />
            <div class="movie-item-content">
              <div class="movie-item-title">The-falcon/div>
              
            </div>
          </a>
          <!-- FIN PELICULA -->
        </div>
      </div>
    </div>
    <!-- FIN ULLTIMAS SERIES -->

    

    <!-- FOOTER SECTION -->
    <footer class="section">
      <div class="container">
        <div class="row">
          <div class="col-4 col-md-6 col-sm-12">
            <div class="content">
              <a href="#" class="logo">
                <img src="../images/logo.png" alt="logo" class="logo-logo">
              </a>
              <p>
                This site was created for movie and gaming enthusiasts. 
                We want to offer you a space where you can enjoy your favorite 
                movies and explore exciting games, all in one place. Our goal is 
                to provide you with the best entertainment experience, easy and 
                hassle-free.
              </p>
            </div>
          </div>
          <div class="col-8 col-md-6 col-sm-12 footer-content">
            <div class="row">
                <!-- Primera sección de categorías -->
                <div class="col-3 col-md-6 col-sm-6 footer-categories">
                    <h3>Categorías</h3>
                    <ul>
                        <li><a href="#">Ciencia ficción</a></li>
                        <li><a href="#">Comedia</a></li>
                        <li><a href="#">Drama</a></li>
                        <li><a href="#">Superhéroes</a></li>
                        <li><a href="#">Animacion</a></li>
                    </ul>
                </div>
            
        
                <!-- Contacto -->
                <div class="col-3 col-md-12 col-sm-12 footer-contact">
                    <h3>Contacto</h3>
                    <p> drakos.contacto@gmail.com</p>
                    <p> (618) 269 25 32</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/drakos_movies?igsh=Y3VkeXg1NWdvODcx" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61574199645655&locale=es_LA" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
          <p>Todos los derechos reservados. © 2025 DRAKOS, S. de R.L. de C.V.</p>
        </div>
        
        </div>
      </div>
    </footer>
    <!-- FIN FOOTER SECTION -->
    
    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <!-- OWL CAROUSEL -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
    ></script>
    <!-- APP SCRIPT -->
    <script src="../js/movies.js"></script>
  </body>
</html>
