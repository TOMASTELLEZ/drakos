<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/movies.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/games.css">
    <link rel="stylesheet" href="../css/games2.css">
    <link rel="stylesheet" href="../css/games3.css">

</head>
<body>

  
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
            <div class="dropdown-menu" id="dropdown-menu" style="display: none;">
              <div class="user-info">
                <img src="../images/perfil.jpg" alt="User" class="user-img">
                <span class="user-name">User Name</span>
              </div>
              <hr class="divider">
              <ul>
                <button class="evelyn-btn" ><i class="fas fa-edit"></i> Edit Profile</button>
                <button class="danna-btn"><i class="fas fa-coins"></i> Tokens</button>
                <button class="dania-btn"><i class="fas fa-question-circle"></i> Help Center</button>
                <button class="valeria-btn"><i class="fas fa-sign-out-alt"></i> Logout</button>
              </ul>
            </div>
      
            <!-- MENÚ PARA CELULAR -->
            <div class="hamburger-menu" id="hamburger-menu">
              <div class="hamburger"></div>
            </div>
            <!-- FIN MENÚ PARA CELULAR -->
          </div>
        </div>
      </div>
      <!-- FIN NAV -->


      <div class='machine1 shake-slow'>
        <div class='shine'></div>
        <div class='top1'>
          <div class='screwTop'></div>
          <div class='panels'>
            <div class='panel'></div>
            <div class='panel'></div>
            <div class='panel'></div>
          </div>
        </div>
        <div class='screen1'></div>
        <div class='table color'>
          <div class='button1'></div>
          <div class='stick'></div>
        </div>
        <div class='bottom color'>
          <div class='line'></div>
          <div class='line'></div>
          <div class='screw'></div>
          <div class='panels'>
            <div class='panel'></div>
            <div class='panel'></div>
            <div class='panel'></div>
            <div class='panel'></div>
            <div class='panel'></div>
          </div>
          <div class='screwRight'></div>
        </div>
      </div>

      <div class="arcade">
        <div class="top"></div>
        <div class="top-screen"></div>
        <div class="screen">
            <div class="glass">
                <span>
                    <a href="game.php" class="game-link"><i></i><i></i></a>
                </span>
            </div>
        </div>
        <div class="bot-screen">
            <div class="joystick"><span></span><span></span></div>
            <div class="buttons"><span></span><span></span></div>
        </div>
        <div class="bot">
            <div class="box">
                <div class="coins">
                    <div class="slot"></div>
                </div>
                <div class="button"></div>
            </div>
            <div class="draw"></div>
        </div>
    </div>

    <div class='machine shake-slow'>
      <div class='shine'></div>
      <div class='top1'>
        <div class='screwTop'></div>
        <div class='panels'>
          <div class='panel'></div>
          <div class='panel'></div>
          <div class='panel'></div>
        </div>
      </div>
      <div class='screen1'></div>
      <div class='table color'>
        <div class='button1'></div>
        <div class='stick'></div>
      </div>
      <div class='bottom color'>
        <div class='line'></div>
        <div class='line'></div>
        <div class='screw'></div>
        <div class='panels'>
          <div class='panel'></div>
          <div class='panel'></div>
          <div class='panel'></div>
          <div class='panel'></div>
          <div class='panel'></div>
        </div>
        <div class='screwRight'></div>
      </div>
    </div>




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

    <script src="../js/movies.js"></script>
</body>
</html>