<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/card.min.css">
    <title>Створити</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="wrapper">
            <div onclick="location.href='{{env('APP_URL')}}/admin'" class="header__logo">
                <img src="{{env('APP_URL')}}/img/icons/posts/logo.svg" alt="logo">
                <div class="header__plus">
                    ADMIN
                </div>
            </div>
            <div onclick="location.href='{{env("APP_URL")}}/logout'" class="header__button">
                Exit
                <img src="{{env('APP_URL')}}/img/icons/posts/arrow.svg" alt="arrow">
            </div>
        </div>
    </div>
</header>

<style>
    .demo{
        width: 200px;
        border: solid 2px #0A7739;
        margin: 100px 50px;
    }
</style>

<div class="demo"> <h1>Партнеры</h1></div>

<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <img src="{{env('APP_URL')}}/img/icons/posts/logoFooter.svg" alt="logo">
            </div>
            <div class="footer__info">
                <div class="footer__info_social">
                    <div class="footer__info_social-title">Наші соціальні мережі</div>
                    <div class="footer__info_social-btns">
                        <a href="#"><img src="{{env('APP_URL')}}/img/icons/posts/tg.svg" alt="tg"></a>
                        <a href="#"><img class="footer__info_social-skype"
                                         src="{{env('APP_URL')}}/img/icons/posts/skype.svg" alt="tg"></a>
                        <a href="#"><img src="{{env('APP_URL')}}/img/icons/posts/fb.svg" alt="tg"></a>
                    </div>
                </div>
                <div class="footer__info_place">
                    <div class="footer__info_social-title">АДРЕСА</div>
                    <div class="footer__info_place-descr">
                        Украина, Киев, ул. Юрия Ильенко 81а
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__separator"></div>
        <div class="footer__bottom">
            <div class="footer__subtitle">2021</div>
            <div class="footer__subtitle footer__subtitle-middle">|</div>
            <div class="footer__subtitle">All rights protected</div>
        </div>
    </div>
</footer>

</body>
</html>
