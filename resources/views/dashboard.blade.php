<?php  Blade::include('/config/database.php'); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="shortcut icon" href="/images/user2.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://api.fontshare.com/css?f[]=gambetta@2,2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d58cfada8f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/dashboard.css">

  <title>Dashboard</title>
</head>
<body class="bg-primary">
  <header>
    <h1 class="head">Dashboard</h1>
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
      <a href="index"><li>Anasayfa</li></a>
      <a href="filmler"><li>Filmler</li></a>
      <a href="profil"><li>Profil</li></a>
      <a href="aboutme"><li>Hakkımızda</li></a>
    </ul>
  </div>
</nav>

<!-- DARK MODE BUTTON -->
<button class="btn-toggle">Mode</button>
  </header>

  <!--            -->
  <div class="container">
  <form>
  <div class="w-75 p-3">

  <div class="input-group" >
    <input type="file"  class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
  </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="text-white"class="form-label">FİLM ADI</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="text-white"class="form-label">TARİHİ</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="text-white"class="form-label"> AÇIKLAMA</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kaydet</button>
  </form>
</div>

<hr>

<div id="app">
  <div class="section">
    <div class="container">
      <div class="content">
        <company-modal></company-modal>
        <companies :companies="companies"></companies>
      </div>
    </div>
  </div>
</div>

<table class="table table-hover table-striped table-bordered table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
  <script src="/js/dashboard.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
