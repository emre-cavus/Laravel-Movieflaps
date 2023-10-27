<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/iletisim.css">
  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

  <link href="https://api.fontshare.com/css?f[]=gambetta@2,2&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d58cfada8f.js" crossorigin="anonymous"></script>

  <title>İletisim</title>
</head>
<body id="body" class="dark-mode">
  <header>
    <h1 class="head" >İletisim</h1>
  <!-- SEARCH -->
  <div class="wrap">
    <div class="search">
      <input type="text" class="searchTerm" placeholder="Search.">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
        </button>
    </div>
 </div>
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
  </div>
</nav>

<div id="cards">
  <div class="card">
    <div class="card-content">
      <div class="card-image">
        <i class="fa-solid fa-envelope"></i>
      </div>
      <div class="card-info-wrapper">
        <div class="card-info">
          <i class="fa-solid fa-envelope"></i>
          <div class="card-info-title">
            <h3>Mail iletişim</h3>  
            <h4>movieflaps@info.com</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="card-image">
        <i class="fa-solid fa-phone"></i>
      </div>
      <div class="card-info-wrapper">
        <div class="card-info">
          <i class="fa-solid fa-phone"></i>
          <div class="card-info-title">
            <h3>Telefon</h3>  
            <h4>Telefon iletişimi : <br>+90 (553) 601 5563</h4>
          </div>    
        </div>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="card-image">
      <i class="fa-solid fa-handshake"></i>
          </div>
      <div class="card-info-wrapper">
        <div class="card-info">
        <i class="fa-solid fa-handshake"></i>
                  <div class="card-info-title">
            <h3>Yardım</h3>  
            <h4>Yardım için destek bölğmğne gidin.</h4>
          </div>    
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="card-image">
      <i class="fa-solid fa-location-dot"></i>
          </div>
      <div class="card-info-wrapper">
        <div class="card-info">
        <i class="fa-solid fa-location-dot"></i>
                  <div class="card-info-title">
            <h3>Ofis adresi:</h3>  
            <h4>Çanakkale ,Merkez</h4>
          </div>    
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="card-image">
      <i class="fa-solid fa-film"></i>
          </div>
      <div class="card-info-wrapper">
        <div class="card-info">
        <i class="fa-solid fa-film"></i>
                  <div class="card-info-title">
            <h3>Film ekleyin</h3>  
            <h4>film yelpaesini genişlet.</h4>
          </div>    
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="card-image">
      <i class="fa-solid fa-code"></i>
    </div>
      <div class="card-info-wrapper">
        <div class="card-info">
        <i class="fa-solid fa-code"></i>
        <div class="card-info-title">
            <h3>Geliştirici</h3>  
            <h4>movieflaps-devops <br>@support.com</h4>
          </div>    
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DARK MODE BUTTON -->
<button type="button" name="dark_light" onclick="toggleDarkLight()" class="btn-toggle">Theme</button>
  </header>

  <script src="/js/iletisim-card.js"></script>
    <!-- DARK MODE -->
    <script src="/js/dark_mode.js"></script>

</body>
</html>
