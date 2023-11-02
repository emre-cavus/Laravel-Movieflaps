<?php /* 
Blade::include('/config/database.php'); 
*/
?>
<?php
/*
try { 
    if(DB::connection()->getPdo()) 
    { 
        echo "Successfully connected to the database => " 
                .DB::connection()->getDatabaseName(); 
    } 
} 
catch (Exception $e) { 
    echo "Unable to connect"; 
} 
*/
?> 
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- DARK MODE -->
  <script src="/js/dark_mode.js"></script>
  <!--            -->

  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://api.fontshare.com/css?f[]=gambetta@2,2&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d58cfada8f.js" crossorigin="anonymous"></script>
  <title>Movieflaps</title>
</head>
<body id="body" class="dark-mode">
  <script src="/js/main.js"></script>
  <!--  MENU -->
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    
    <span></span>
    <span></span>
    <span></span>
    
    <ul id="menu">
      <a href="index"><li><i class="fa-solid fa-house" style="color: #f3f4f7;"></i>Anasayfa</li></a>
      <a href="filmler"><li><i class="fa-solid fa-film" style="color: #f3f4f7;"></i>Filmler</li></a>
      <a href="profil"><li><i class="fa-solid fa-user" style="color: #f3f4f7;"></i>Profil</li></a>
      <a href="iletisim"><li><i class="fa-solid fa-link" style="color: #f3f4f7;"></i>İletişim</li></a>
      <hr>
      <a href="destek"><li><i class="fa-solid fa-code" style="color: #c6c7c7;"></i>Destek</li></a>
      <a href="ayarlar"><li><i class="fa-solid fa-gear" style="color: #c6c7c7;"></i>Ayarlar</li></a>

    </ul>
</nav>
  <header>
    <h1 class="head" >MovieFlaps</h1>
  <!-- SEARCH -->
  <div class="wrap">
    <div class="search">
      <input type="text" class="searchTerm" placeholder="Search.">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
        </button>
    </div>
 </div>

<!-- DARK MODE BUTTON -->
<button type="button" name="dark_light" onclick="toggleDarkLight()" class="btn-toggle">Theme</button>
<button onclick=location.href="login" class="btn-login" id="login">Login</button>
<!--
<script src="/js/popup.js"></script>
-->
  </header>
  <!-- RİGHT MENU -->
      <aside>
        <div class="aside-menu">
          <h1>Yorumlar</h1>
          <div class="li">
            <input type="text" disabled>
          </div>
        </div>
      </aside>
<?php 

?>
      <form action="/config/database.php" method="POST" enctype="multipart/form-data">
<!-- MOVİES -->
  <section>
    <div class="card">
      <input name="afiş" type="image" src="https://m.media-amazon.com/images/M/MV5BMzUzNDM2NzM2MV5BMl5BanBnXkFtZTgwNTM3NTg4OTE@._V1_.jpg" alt="image" />

      <div class="card-content">
        <input name="Filmin-adi" type="text" disabled></input>
        <input name="Konu" type="text" disabled></input>
      </div>
    </div>

    <div class="card">
      <input type="image" src="https://i.pinimg.com/564x/59/11/58/59115804d9fdc377b358837dcc4fc6b0.jpg" alt="image" />

      <div class="card-content">
        <input name="Filmin-adi" type="text" disabled></input>
        <input name="Konu" type="text" disabled></input>
      </div>
    </div>

    <div class="card">
      <input name="afiş" type="image" src="https://i.pinimg.com/564x/0c/d3/ed/0cd3edf1c380618fb6028746f39e2387.jpg" alt="image" />

      <div class="card-content">
        <input name="Filmin-adi" type="text" disabled></input>
        <input name="Konu" type="text" disabled></input>
      </div>
    </div>

    <div class="card">
      <input name="afiş" type="image" src="https://i.pinimg.com/564x/1f/a2/11/1fa211b12ee285d567284fa9c61670d0.jpg" alt="image" />

      <div class="card-content">
        <input name="Filmin-adi" type="text" disabled></input>
        <input name="Konu" type="text" disabled></input>
      </div>
    </div>

  </form>
  </section>

  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023 Tüm Hakları Saklıdır ܁ Bir EMRE CAVUS ürünüdür.
            </p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="github" href="#"><i class="fa fa-github"></i></a></li> 
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li> 
            </ul>
          </div>
        </div>
      </div>
</footer>
    </body>
</html>
