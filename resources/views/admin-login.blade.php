<?php                    
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
?> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/admin-login.css">
  <link rel="shortcut icon" href="/images/user2.png" type="image/x-icon">
  <title>Admin</title>
</head>
<body>
  
  <div class="login">
    <h1>Login</h1>
      <form method="post" action='dashboard.blade.php'>
          <input name="username" type="text" placeholder="Username" required="required" />
          <input name="password" type="password" placeholder="Password" required="required" />
          <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
      </form>
  </div>
  <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username=="" or $password=="")
    {
      echo "Lütfen Tüm Alanları Doldurun!";	
    }
    else
      {
        if ($username=="Emre" && $password=="emre123")
        {
          echo "Başarılı Şekilde Giriş Yaptınız";	
        }
        else
        {
          echo "Hatalı Kullanıcı Adı veya Şifre Girdiniz.";	
        }
      }
  /*
  if(isset($_POST["FirstName"],$_POST["Password"])){  // eğer girdi adında bir POST varsa
              $ad = $_POST["FirstName"]; //POSTdeğerini değişkene aktarıyoruz
              $sifre = $_POST["Password"]; 
      echo $degisken; // değişkene aktardığımız POST değerini ekrana yazdırıyoruz

      $ekle = "INSERT INTO `Persons`(`ID`, `FirstName`, `Password`) VALUES ('".$ad.', '.$sifre."')";

      if($baglan->query($ekle)===TRUE){
        echo "<script> alert('Mesajınız başarı ile gönderilmiştir.')</script>";
      }
  }
  */
?>
</body>
</html>
