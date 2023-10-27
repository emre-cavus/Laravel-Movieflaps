<?php
if(DB::connection()->getPdo()) 
{ 
    echo "Successfully connected to the database => " 
                 .DB::connection()->getDatabaseName(); 
} 
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
  <title>Movieflaps'e Giriş Yap</title>
</head>
<body>

<?php
/*
try
{
 $baglanti = new PDO("mysql:host=localhost;dbname=Movieflaps", "root", "");
}
catch(PDOException $e)
{
 die("Bağlantı Hatası:" . $e->getMessage());
}
try
{
 $sorgu = "CREATE TABLE login(
 id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 username VARCHAR(20) NOT NULL,
 password VARCHAR(20) NOT NULL,
 email VARCHAR(60) NOT NULL UNIQUE
  )";

 $baglanti->exec($sorgu);
 echo "Tablo oluşturuldu.";
} catch(PDOException $e)
{
 die("Hata :" . $e->getMessage());
}
unset($baglanti);
*/
?>
  <img src="/images/favicon.png">
<div class="login-box">
  <h2>Login</h2>
  <form>
    <div class="user-box">
      <input type="text" name="username" required="">
      <span class="invalid-feedback"><?php echo $username_err; ?></span>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
      <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>
  <div class="sign-up">
    <a class="sign-up-link" href="sign-up">Create Account</a>
  </div>
</body>
</html>

