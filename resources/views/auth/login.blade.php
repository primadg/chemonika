<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/login.min.css">
    <title>Login</title>
</head>
<body>
<section class="login">
    <div class="container">
        <div class="login__main">
            <div class="login__logo">
                <img src="img/icons/login/logo.svg" alt="logo">
                <div class="login__plus">ADMIN</div>
            </div>
            <form class="login__form" method="POST" action="{{route("login")}}">
                @csrf
                <label class="login__label" for="login">Login</label>
{{--                <x-label for="login" :value="__('Email')" />--}}

                <input class="login__input" name="email" id="login" type="text">
                <label class="login__label login__label-pass"  for="pass">Password</label>
{{--                <x-label for="password" :value="__('Password')"  />--}}
                <input class="login__input" id="pass" name="password" type="password">
                <button class="login__btn" type="submit">
                    Enter
                    <img src="img/icons/login/chevron.svg" alt="chevron">
                </button>
            </form>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="wrapper">
            <div class="footer__text">2021</div>
            <div class="footer__text footer__separator">|</div>
            <div class="footer__text">All rights protected</div>
        </div>
    </div>
</footer>
</body>
</html>
