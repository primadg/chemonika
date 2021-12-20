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

<!-- <style>

</style> -->

<section class="startAdmin">
    <div class="container">
        <div class="startAdmin__wrapper">
            <a href="{{env('APP_URL')}}/posts" class="startAdmin__block">
                <div class="startAdmin__block_title">Продукція</div>
                <div class="startAdmin__block_footer">
                    <div class="startAdmin__block_footer-text">23 продукта</div>
                    <!-- Встроить через тег <img src="" alt=""> -->
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" fill="#219653"/>
                    </svg>
                </div>
            </a>
            <a href="{{env('APP_URL')}}/groups" class="startAdmin__block">
                <div class="startAdmin__block_title">Групи продукції</div>
                <div class="startAdmin__block_footer">
                    <div class="startAdmin__block_footer-text">23 продукта</div>
                    <!-- Встроить через тег <img src="" alt=""> -->
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" fill="#219653"/>
                    </svg>
                </div>
            </a>
            <a href="{{env('APP_URL')}}/usages" class="startAdmin__block">
                <div class="startAdmin__block_title">Область використання</div>
                <div class="startAdmin__block_footer">
                    <div class="startAdmin__block_footer-text">23 продукта</div>
                    <!-- Встроить через тег <img src="" alt=""> -->
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" fill="#219653"/>
                    </svg>
                </div>
            </a>

            <a href="{{env('APP_URL')}}/contact" class="startAdmin__block">
                <div class="startAdmin__block_title">Контакты</div>
                <div class="startAdmin__block_footer">
                    <div class="startAdmin__block_footer-text">контакты</div>
                    <!-- Встроить через тег <img src="" alt=""> -->
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" fill="#219653"/>
                    </svg>
                </div>
            </a>


            <a href="{{env('APP_URL')}}/partners" class="startAdmin__block">
                <div class="startAdmin__block_title">Партнери</div>
                <div class="startAdmin__block_footer">
                    <div class="startAdmin__block_footer-text">23 продукта</div>
                    <!-- Встроить через тег <img src="" alt=""> -->
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" fill="#219653"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>
    <!-- <div class="demo"><a href="{{env('APP_URL')}}/posts"> Публикации -> /posts</a></div> -->
    <!-- <div class="demo"><a href="{{env('APP_URL')}}/groups"> Группа -> /groups</a></div> -->
    <!-- <div class="demo"><a href="{{env('APP_URL')}}/usages"> Область использования -> /usages</a></div> -->
    <!-- <div class="demo"><a href="{{env('APP_URL')}}/partners"> Партнеры -> /partners</a></div> -->
</section>



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
