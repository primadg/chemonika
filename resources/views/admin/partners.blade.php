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


<section class="groupsAdmin">
    <div class="container">
        <div class="groupsAdmin__header">
            <div class="groupsAdmin__title">Партнери</div>
        </div>
        <div class="groupsAdmin__add addPartnerBtn">
            <input class="addPartnerBtn_file" type="file" name="myImage" accept="image/png, image/gif, image/jpeg" />
            <div class="groupsAdmin__add_text">Додати партнера</div>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.78323 0.712379L6.35891 0.712378L6.35891 6.35913L0.712158 6.35913V7.78345L6.35891 7.78345L6.35891 13.4302L7.78323 13.4302L7.78323 7.78345L13.43 7.78345V6.35913L7.78323 6.35913L7.78323 0.712379Z" fill="#219653"/>
            </svg>                    
        </div>
        <div class="partnersAdmin__wrapper gridly">
            <div class="partnersAdmin__wrapper_block brick">
                <img src="{{env("APP_URL")}}/img/partners/image.png" alt="partner">
                <img class="partnersAdmin__wrapper_block-close" src="{{env("APP_URL")}}/img/partners/close.svg" alt="close">
            </div>
            <div class="partnersAdmin__wrapper_block brick">
                <img src="{{env("APP_URL")}}/img/partners/image1.png" alt="partner">
                <img class="partnersAdmin__wrapper_block-close" src="{{env("APP_URL")}}/img/partners/close.svg" alt="close">
            </div>
            <div class="partnersAdmin__wrapper_block brick">
                <img src="{{env("APP_URL")}}/img/partners/image2.png" alt="partner">
                <img class="partnersAdmin__wrapper_block-close" src="{{env("APP_URL")}}/img/partners/close.svg" alt="close">
            </div>
            <div class="partnersAdmin__wrapper_block brick">
                <img src="{{env("APP_URL")}}/img/partners/image3.png" alt="partner">
                <img class="partnersAdmin__wrapper_block-close" src="{{env("APP_URL")}}/img/partners/close.svg" alt="close">
            </div>
            <div class="partnersAdmin__wrapper_block brick">
                <img src="{{env("APP_URL")}}/img/partners/image4.png" alt="partner">
                <img class="partnersAdmin__wrapper_block-close" src="{{env("APP_URL")}}/img/partners/close.svg" alt="close">
            </div>
            <!-- <div class="partnersAdmin__wrapper_block partnersAdmin__wrapper_block-specific"></div> -->
        </div>
    </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    let partnerBlockClose = document.querySelectorAll('.partnersAdmin__wrapper_block-close');
    partnerBlockClose.forEach(item => {
        item.onclick = (e) => {
            e.target.closest('.partnersAdmin__wrapper_block').remove();
        }
    });
</script>
<script src="{{env('APP_URL')}}/js/dragDrop.js"></script>
</body>
</html>