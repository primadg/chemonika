<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="root" content="{{env("APP_URL")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <a href="{{env('APP_URL')}}" class="header__logo">
                <img src="{{env('APP_URL')}}/img/icons/logo.svg" alt="logo">
            </a>
            <div class="header__info">
                <div class="header__info_contact">
                    <a class="header__info_contact-link header__active_link link__products link__about"
                       href="{{env('APP_URL')}}">Про нас</a>
                </div>
                <div class="header__info_contact">
                    <a class="header__info_contact-link x link__products" href="{{env('APP_URL').'/products'}}">Продукція</a>
                </div>
                <div class="header__info_contact">
                    <a class="header__info_contact-link link__contacts" href="#form">Контакти</a>
                </div>
                <div class="header__info_lang">
                    <div class="header__info_lang-chosen">UKR</div>
                    <svg class="header__info_lang-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path class="header__info_lang-arrow_path"
                              d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z" fill="#263640"/>
                    </svg>
                    <ul class="header__info_lang-dropdown">
                        <li onclick="location.href='{{env("APP_URL")."/ukr"}}'" class="header__info_lang-dropdown-li">
                            UKR
                        </li>
                        <li onclick="location.href='{{env("APP_URL")."/ru"}}'" class="header__info_lang-dropdown-li">
                            RUS
                        </li>
                        <li onclick="location.href='{{env("APP_URL")."/en"}}'" class="header__info_lang-dropdown-li">
                            EN
                        </li>
                    </ul>
                </div>
                <a href="mailto: {{env("MAIL_TO_NAME")}}" class="header__info_button">
                    <span>Написати нам</span>
                    <svg class="header__info_button-svg" width="12" height="8" viewBox="0 0 12 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z" fill="#ffffff"/>
                    </svg>
                </a>
            </div>
            <div class="burger">
                <div class="burger__line"></div>
                <div class="burger__line"></div>
                <div class="burger__line"></div>
            </div>
        </div>
    </div>
</header>
<div class="burger__menu">
    <a href="{{env('APP_URL')}}" class="burger__menu_list burger__menu_list-about">Про нас</a>
    <a href="{{env('APP_URL').'/products'}}"
       class="burger__menu_list burger__menu_list-middle burger__menu_list-products">Продукцiя</a>
    <a onclick="hideBurgerMenu()" href="#form" class="burger__menu_list">Контакти</a>
    <div class="burger__menu_social">
        <a href="#">
            <img src="img/icons/telegram.svg" alt="telegram">
        </a>
        <a class="form__row_links-skype" href="#">
            <img src="img/icons/skype.svg" alt="skype">
        </a>
        <a href="#">
            <img src="img/icons/facebook.svg" alt="facebook">
        </a>
    </div>
    <div class="burger__menu_languages">
        <div onclick="location.href='{{env("APP_URL")."/ukr"}}'" class="burger__menu_languages-text">
            UKR
        </div>
        <div onclick="location.href='{{env("APP_URL")."/ru"}}'"
             class="burger__menu_languages-text burger__menu_languages-text_middle">
            RUS
        </div>
        <div onclick="location.href='{{env("APP_URL")."/en"}}'" class="burger__menu_languages-text">
            ENG
        </div>
    </div>
</div>
<div class="firstPage">
    <section class="promo">
        <img class="promo__img_mobile" src="img/images/promo.png" alt="images">
        <div class="container">
            <div class="row promo__row">
                <div class="col-lg-6 col-md-6">
                    <h1 class="promo__title">Ваш надійний постачальник харчових інгредієнтів</h1>
                    <div class="promo__descr">
                        Постачання хімічної сировини з Азії, Європи, Америки для різноманітних галузей промисловості:
                        харчової, косметичної, металургійної, нафтогазової, лакофарбової, полімерної, будівельної та
                        інших
                    </div>
                    <div class="promo__suggestions">
                        <div onclick="location.href='{{env("APP_URL")."/products"}}'" class="promo__suggestions_hov">
                            Наші пропозіції
                        </div>
                        <svg class="header__info_button-svg" width="12" height="8" viewBox="0 0 12 8" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z" fill="#219653"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img class="promo__images" src="img/images/promo.png" alt="promo">
                </div>
            </div>
        </div>
    </section>
    <section class="сompany">
        <div class="container">
            <div class="сompany__title">
                Інформація про компанію
            </div>
            <div class="сompany__wrapper">
                <div class="сompany__left">
                    <div class="сompany__text">Компанія була заснована у 2020 році. Головним напрямком нашої діяльності
                        є постачання харчових інгредієнтів від провідних виробників.
                    </div>

                    <div class="сompany__text">

                        Наші переваги:
                        <li>
                            Постачаємо продукцію напряму від провідних виробників
                        </li>
                        <li>
                            Найвища якість та найкращі умови для співпраці
                        </li>
                        <li>
                            Відкритість
                        </li>
                        <li>
                            Оперативність
                        </li>
                    </div>
                    <a href="#about__form" class="сompany__btn scrollTo">
                        <span>Написати нам</span>
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 0L0.589996 1.41L5.17 6L0.589996 10.59L2 12L8 6L2 0Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <div class="сompany__right">
                    <img class="сompany__right_img" src="{{env("APP_URL")}}/img/img.png" alt="img">
                    <div class="сompany__right_square"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <div class="clients__title">Наші клієнти</div>
            <div class="clients__wrapper">
                @foreach($partners as $partner)
                    <div class="clients__block">
                        <img src="{{env("APP_URL")}}/{{$partner->url}}" alt="image">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="container">
            <div class="col-lg-10 banner__main">
                <div class="banner__main_block">
                    <div class="banner__main_title">
                        Ми пропонуємо продукцію лише перевірених виробників зі світовим іменем
                    </div>
                    <div class="banner__main_descr">
                        Наша місія - залишатися високоефективною компанією, провідним дистриб'ютором якісних хімічних
                        матеріалів. Ми розвиваємося разом з партнерами, постійно вдосконалюючи свої професійні навички
                        та вміння!
                    </div>
                    <div class="banner__main_separator"></div>
                    <div class="banner__main_choose">
                        <div onclick="location.href='{{env("APP_URL")."/products"}}'" class="banner__main_choose-hov">
                            Обери свій сегмент
                        </div>
                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z" fill="#ffffff"/>
                        </svg>
                    </div>
                </div>
                <div class="banner__main_img parallax">
                    <img src="img/images/banner.png" alt="banner">
                </div>
            </div>
        </div>
    </section>

    <section style="padding-top: 160px" class="store">
        <div class="container">
            <div class="store__title">Наші склади</div>
            <div class="store__wrapper">
                <div class="store__block">
                    <div class="store__block_square">
                        <img src="{{env("APP_URL")}}/img/images/1_storage.png" alt="Kyiv">
                    </div>
                    <div class="store__block_title">Київська область<br>с. Гурівщина</div>
                </div>
                <div class="store__block">
                    <div class="store__block_square">
                        <img src="{{env("APP_URL")}}/img/images/2_storage.png" alt="Charkiv">
                    </div>
                    <div class="store__block_title">м. Харків</div>
                </div>
                <div class="store__block">
                    <div class="store__block_square">
                        <img src="{{env("APP_URL")}}/img/images/3_storage.png" alt="Odessa">
                    </div>
                    <div class="store__block_title">м. Одеса</div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="products__block col-md-4 col-sm-6 col-12">
                        <div class="products__block_header">
                            <img width="310" height="330" src="{{env("APP_URL").$product->img}}" alt="product">
                        </div>
                        <div class="products__block_main">
                            <div class="products__block_main-title">{{$product->name}}</div>
                            <div class="products__block_main-subTitle">({{$product->group}})</div>
                            <div style="text-align:justify"
                                 class="products__block_main-descr">{{mb_substr( $product->description,0,120)}}...
                            </div>
                            @if (!$product->draft)
                                <div class="products__block_main-btn">
                                    <div onclick="location.href=' {{route("products.show",$product->id)}}'">Дізнатися
                                        більше
                                    </div>
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z" fill="#219653"/>
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <?use Illuminate\Support\Facades\DB;?>
@include("ukr/contacts", ["contact"=>DB::table('contact_table_ukr')->first()])
@include("ukr/footer", ["contact"=>DB::table('contact_table_ukr')->first()])
</div>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
