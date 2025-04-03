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
    <link rel="stylesheet" href="../css/peliculas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>

  <body>

    
    <!-- NAV -->
    <!-- NAV -->
    <div class="nav-wrapper">
    <div class="container">
        <div class="nav">
        <a href="movies.php" class="logo">
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



    <div class="video">
      <div class="video-container">
        <video id="movie" controls>
          <source id="movie-source" src="" type="video/mp4">
        </video>
    
        <div class="movie-details">
          <h3 id="movie-title"></h3>
          <hr class="movie-line">
          <p id="movie-description"></p>
        </div>
        <h2 class="titulos-similares">Títulos Similares</h2>

        <div class="similares">
          <img src="../images/capitan_america.jpg" alt="Similar 1">
          <img src="../images/the-falcon.webp" alt="Similar 2">
          <img src="../images/wanda.webp" alt="Similar 3">
      </div>




      </div>
      <div class="linea-vertical"></div>
      <div class="recomendaciones">
        <h2>Recomendaciones</h2>
        <img src="../images/hangover.jpg" alt="Imagen recomendada">
        <img src="../images/hangover_2.jpg" alt="Recomendación 1">
        <img src="../images/hangover_3.jpg" alt="Recomendación 2">
      </div>
    </div>
    


   



    

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
                    <p> tellez.toy2112@gmail.com</p>
                    <p> (618) 269 25 32</p>
                    <div class="social-icons">
                        <a href="https://instagram.com" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://facebook.com" target="_blank">
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
    <script src="../js/peliculas.js"></script>
  </body>
</html>
