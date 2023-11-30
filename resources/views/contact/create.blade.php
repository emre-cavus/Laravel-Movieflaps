
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/login.css">
    <script src="https://kit.fontawesome.com/d58cfada8f.js" crossorigin="anonymous"></script>
    <script src="/js/login.js"></script>
        <title>Moviflaps'e Üye Ol</title>

</head>
<body>
@extends('layout')
@section('content')
        <img src="/images/favicon.png">
    <div class="login-box">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p> <br><br>
        <form action="{{route('register')}}" method="POST">
            {!!csrf_field()!!}
            <div class="user-box">
                <input type="text" name="name" id="name" class="form-control"required>
                <label> Username </label>
            </div>
            <div class="user-box">
                <input type="email" name="email"id="email" class="form-control"required>
                <label>E-mail</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" class="form-control"required>
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="confirm_password" id="password" class="form-control"required>
                <label>Confirm Password</label>
                <!--<p>Şifreyi göster</p><i class="fa-solid fa-eye" style="color: #7a8494; cursor: pointer;" onclick="togglePassword()"></i>-->

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
    <a class="sign-up-link" href="/login">Login Account</a>
    </div>
@stop
</body>
</html>
