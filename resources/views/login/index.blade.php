<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/d58cfada8f.js" crossorigin="anonymous"></script>
  <title>Movieflaps'e Giriş Yap</title>
</head>
<body>
@extends('layout')
@section('content')

    <img src="/images/favicon.png">
  <div class="login-box">
    <h2>Login</h2>
    <form action="{{route('check')}}" method="POST">
      {!!csrf_field()!!}
      <div class="user-box">
        <input type="text" name="name" required> 
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="email" name="email" required>
        <label>E-Mail</label>
      </div>
      <div class="user-box">
        <input type="password" id="password" name="password" required>
        <p>Şifreyi göster</p><i class="fa-solid fa-eye" style="color: #7a8494; cursor: pointer;" onclick="togglePassword()"></i>

        <label>Password</label>
      </div>
      <input type="submit" class="effect">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </input>
    </form>
  </div>
    <div class="sign-up">
      <a class="sign-up-link" href="/register">Create Account</a>
    </div>
@stop
<script src="/js/login.js"></script>
</body>
</html>

