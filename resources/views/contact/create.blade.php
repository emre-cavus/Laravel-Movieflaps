
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/register.css">
        <title>Moviflaps'e Üye Ol</title>

</head>
<body>
@extends('layout')
@section('content')
    <div class="login-box">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p> <br><br>
        <form action="{{route('register')}}" method="post">
            {!!csrf_field()!!}
            <div class="user-box">
                <input type="text" name="name" id="name" class="form-control">
                <label> Username </label>
            </div>
            <div class="user-box">
                <input type="email" name="email"id="name" class="form-control">
                <label>E-mail</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="name" class="form-control">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="confirm_password" id="name" class="form-control">
                <label>Confirm Password</label>
            </div>
            <a href="login">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="Submit">
            </a>
        </form>
    </div>
    <div class="sign-up">
    <a class="sign-up-link" href="/login">Login Account</a>
    </div>
@stop
</body>
</html>
