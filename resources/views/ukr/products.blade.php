<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="root" content="{{env("APP_URL")}}">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.min.css">
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
                    <a class="header__info_contact-link link__about" href="{{env('APP_URL')}}">Про нас</a>
                </div>
                <div class="header__info_contact">
                    <a class="header__info_contact-link header__active_link link__products"
                       href="{{env('APP_URL').'/products'}}">Продукція</a>
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
    <a href="{{env('APP_URL').'/products'}}" class="burger__menu_list burger__menu_list-middle burger__menu_list-products">Продукцiя</a>
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
        <div onclick="location.href='{{env("APP_URL")."/ru"}}'" class="burger__menu_languages-text burger__menu_languages-text_middle">
            RUS
        </div>
        <div onclick="location.href='{{env("APP_URL")."/en"}}'" class="burger__menu_languages-text">
            ENG
        </div>
    </div>
</div>
<div class="production">
    <section class="secondPage__promo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="secondPage__promo_title">
                        Ми пропонуємо продукцію найбільших світових виробників
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="secondPage__filter">
        <div class="container">
            <div class="row">
                <div class="secondPage__filter_title">
                    Фільтр продукції
                </div>
                <div class="secondPage__filter_group-wrapper">
                    <div class="secondPage__filter_group">
                        <div class="secondPage__filter_group-title">Група</div>
                        <div>
                            <select name="sources" id="sources" class="custom-select sources custom-select_FC"
                                    placeholder="{{$group}}">
                                <option data-filter="group" value="Антиоксиданти">Антиоксиданти</option>
                                <option data-filter="group" value="Підсолоджувачі">Підсолоджувачі</option>
                                <option data-filter="group" value="Стабілізатори">Стабілізатори</option>
                                <option data-filter="group" value="Консервант">Консерванти</option>
                                <option data-filter="group" value="Протеїн">Протеїни</option>
                            </select>
                        </div>
                    </div>
                    <div class="secondPage__filter_group">
                        <div class="secondPage__filter_group-title">Галузь застосування</div>
                        <div class="rep">
                            <select name="spread" id="spread" class="custom-select sources1" placeholder="{{$usage}}">
                                <option data-filter="usage" value="Харчова">Харчова</option>
                                <option data-filter="usage" value="Косметична">Косметична</option>
                                <option data-filter="usage" value="Інші">Інші</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="secondPage__goods">
        <div class="container">

            @foreach ($products->chunk(3) as $chunk)
                <div class="row">
                    @foreach ($chunk as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 secondPage__goods_card">
                            <div class="secondPage__goods_card-img">
                                <img src="{{env("APP_URL").($product->img)}}" alt="product">
                            </div>
                            <div class="secondPage__goods_card-main">
                                <div class="secondPage__goods_card-main_title">
                                    {{ $product->name }}
                                </div>
                                <div class="secondPage__goods_card-main_subTitle">
                                    {{mb_substr( $product->description,0,250)}}...
                                </div>
                                @if (!$product->draft)
                                <div class="products__block_main-btn secondPage__goods_card-btn">
                                    <div onclick="location.href='{{route("products.show", $product->id)}}'">Дизнатися
                                        більше
                                    </div>
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z"
                                              fill="#219653"></path>
                                    </svg>
                                </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            {{ $products->links() }}
        </div>
    </section>
    <section class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form__title">
                        Контакти
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
            <div class="row form__row">
                <div class="col-lg-6 form__social">
                    <div class="form__row_wrapper form__row_wrapper-MT">
                        <div>
                            <img src="img/icons/phone.svg" alt="phone">
                        </div>

                        <div class="form__row_wrapper-title form__row_wrapper-title-PL">
                            <a href="callto: (067) 686-9291">+38(067)686-92-91</a>
                        </div>
                    </div>
                    <div class="form__row_wrapper form__row_wrapper-MT">
                        <div>
                            <img style="opacity: 0" src="img/icons/phone.svg" alt="phone">
                        </div>


                        <div class="form__row_wrapper-title form__row_wrapper-title-PL">
                            <a href="callto: (050) 332-66-44"> +38(050)332-66-44</a>
                        </div>
                    </div>

                    <div class="form__row_wrapper form__row_wrapper-MT">
                        <div>
                            <img src="img/icons/mail.svg" alt="mail">
                        </div>


                        <div class="form__row_wrapper-title form__row_wrapper-title-PL">
                            <a href="mailto: akabanov@chemonika.com.ua"> akabanov@chemonika.com.ua</a>
                        </div>
                    </div>
                    <div class="form__row_wrapper form__row_wrapper-MT">
                        <div>
                            <img style="opacity: 0" src="img/icons/mail.svg" alt="mail">
                        </div>


                        <div class="form__row_wrapper-title form__row_wrapper-title-PL">
                            <a href="mailto: akabanov@chemonika.com.ua">a.petrishcheva@chemonika.com.ua</a>
                        </div>
                    </div>
                    <div style="margin-top: 45px" class="form__row_wrapper">
                        <div>
                            <img src="img/icons/location.svg" alt="location">
                        </div>
                        <div class="form__row_wrapper-title">
                            Україна, м. Київ, вул. Юрія Ильєнка 81а
                        </div>
                    </div>
                    <div class="form__row_links">
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
                </div>
                <div class="col-lg-6 form__form">
                    <div class="form__form_title">
                        Форма зворотнього зв’язку
                    </div>
                    <a name="form"></a>
                    <div>
                        <!-- <img src="" alt=""> -->
                        <img class="form__form_check success__form default__form-hidden" src="img/icons/check.svg" alt="banner">
                        <div class="form__form_descr success__form default__form-hidden">
                            Ваша повідомлення успішно відправлено.
                            Найближчим часом з вами зв'яжется наш менеджер.
                        </div>
                        <div class="form__form_resend success__form default__form-hidden">
                            Надіслати ще
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z" fill="#ffffff"></path>
                            </svg>
                        </div>
                        <div class="form__form_label form__form_label-mt default__form">
                            Ваше ім’я
                        </div>
                        <input class="form__form_input default__form" required id="nameInput" type="text" name="userName">
                        <div class="form__form_mail">
                            <span class="form__form_mail-uncorrect">The data is filled in incorrectly</span>
                            <div class="form__form_label default__form">
                                Email або телефон
                            </div>
                            <input class="form__form_input default__form" required id="email" type="email" name="email">
                        </div>
                        <div class="form__form_label default__form">
                            Текст повідомлення
                        </div>
                        <textarea class="form__form_textarrea default__form" id="textInput" name="text"></textarea>
                        <button id="formSend" class="header__info_button form__form_btn form__form_btn-form default__form">
                            <span>Надіслати</span>
                            <svg class="header__info_button-svg" width="12" height="8" viewBox="0 0 12 8" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z" fill="#ffffff"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 footer__logo">
                    <img src="{{env("APP_URL")}}/img/icons/logo__footer.svg" alt="logo">
                </div>
                <div class="col-lg-6 footer__top">
                    <div class="footer__top_top">
                        <div class="footer__top_top-our">Наші соціальні мережі</div>
                        <div class="footer__top_top-right footer__top_top-our">АДРЕСА</div>
                    </div>
                    <div class="footer__top_bottom">
                        <div class="footer__top_bottom-links">
                            <a href="#">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.265 1.4279C20.9803 1.19106 20.6367 1.03585 20.2708 0.978796C19.9048 0.921742 19.5303 0.964978 19.187 1.1039L1.266 8.3389C0.882849 8.4966 0.556707 8.76707 0.330839 9.11442C0.104972 9.46177 -0.00994428 9.86959 0.00133764 10.2838C0.0126196 10.6979 0.149566 11.0989 0.394008 11.4334C0.63845 11.768 0.978832 12.0203 1.37 12.1569L4.995 13.4179L7.015 20.0999C7.04268 20.1891 7.08274 20.2739 7.134 20.3519C7.14199 20.3639 7.153 20.3719 7.161 20.3849C7.21993 20.4669 7.29109 20.5394 7.37199 20.5999C7.39458 20.6176 7.41794 20.6343 7.442 20.6499C7.53672 20.7128 7.64159 20.7588 7.752 20.7859L7.765 20.7869L7.771 20.7899C7.83783 20.8033 7.90583 20.81 7.974 20.8099L7.99199 20.8069C8.09441 20.8052 8.19594 20.7877 8.293 20.7549C8.316 20.7469 8.335 20.7349 8.357 20.7249C8.42959 20.6951 8.49841 20.6569 8.562 20.6109C8.61265 20.5679 8.66331 20.5249 8.71399 20.4819L11.416 17.4989L15.446 20.6209C15.8007 20.8972 16.2374 21.0474 16.687 21.0479C17.1582 21.0474 17.615 20.8848 17.9806 20.5875C18.3462 20.2901 18.5984 19.8761 18.695 19.4149L21.958 3.3979C22.0318 3.03756 22.0063 2.66394 21.8842 2.31696C21.7622 1.96998 21.5481 1.66268 21.265 1.4279ZM8.37 13.7359C8.2315 13.8741 8.13688 14.0501 8.09799 14.2419L7.788 15.7459L7.00399 13.1529L11.069 11.0359L8.37 13.7359ZM16.672 19.0399L11.909 15.3499C11.7097 15.1961 11.4598 15.1231 11.209 15.1453C10.9583 15.1675 10.7251 15.2834 10.556 15.4699L9.68999 16.4249L9.996 14.9379L17.079 7.8549C17.2471 7.68582 17.3492 7.46226 17.3669 7.22452C17.3847 6.98679 17.317 6.75053 17.1759 6.55833C17.0349 6.36613 16.8298 6.23064 16.5977 6.17629C16.3656 6.12194 16.1217 6.1523 15.91 6.2619L5.745 11.5539L2.02 10.1909L19.999 2.9999L16.672 19.0399Z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="footer__top_bottom-skype" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.14 11.813C14.7393 11.5557 14.3044 11.3561 13.848 11.22C13.568 11.135 13.258 11.052 12.938 10.973C12.658 10.895 12.326 10.815 11.916 10.725C11.4267 10.6224 10.9465 10.4806 10.48 10.301C10.2396 10.2076 10.0274 10.0536 9.86401 9.85401C9.74446 9.69067 9.68766 9.48977 9.70401 9.28801C9.70365 9.07168 9.77583 8.86148 9.90901 8.69101C10.0954 8.47267 10.3372 8.30859 10.609 8.21601C11.0661 8.05894 11.5479 7.98577 12.031 8.00001C12.4049 7.99381 12.7776 8.04301 13.137 8.14601C13.3754 8.21308 13.5999 8.32212 13.8 8.46801C13.9294 8.56036 14.0398 8.67683 14.125 8.81101C14.1868 8.92755 14.2709 9.03071 14.3727 9.11458C14.4745 9.19845 14.5919 9.26135 14.718 9.29968C14.8442 9.338 14.9767 9.35099 15.108 9.33789C15.2392 9.32479 15.3665 9.28587 15.4827 9.22336C15.5988 9.16084 15.7014 9.07598 15.7846 8.97365C15.8678 8.87132 15.9299 8.75355 15.9674 8.62711C16.0049 8.50068 16.017 8.36807 16.003 8.23693C15.9891 8.1058 15.9493 7.97872 15.886 7.86301C15.6751 7.49003 15.3903 7.16404 15.049 6.90501C14.6547 6.60208 14.2074 6.37522 13.73 6.23601C13.1789 6.0732 12.6066 5.99366 12.032 6.00001C11.3016 5.98429 10.5745 6.10293 9.88701 6.35001C9.26524 6.57636 8.71905 6.97189 8.31001 7.49201C7.91824 8.00919 7.70615 8.6402 7.70601 9.28901C7.68979 9.93494 7.89439 10.5671 8.28601 11.081C8.6641 11.5572 9.1597 11.9267 9.72401 12.153C10.1504 12.3171 10.587 12.4534 11.031 12.561C11.039 12.564 11.045 12.571 11.053 12.573C11.245 12.631 11.551 12.708 11.993 12.803C12.166 12.841 12.328 12.882 12.49 12.923C12.506 12.927 12.529 12.932 12.544 12.937L12.562 12.939C12.81 13.003 13.049 13.068 13.268 13.135C13.5371 13.2137 13.7939 13.3295 14.031 13.479C14.1789 13.5719 14.3032 13.6979 14.394 13.847C14.4819 14.029 14.5225 14.2302 14.512 14.432C14.5259 14.6932 14.4504 14.9514 14.298 15.164C14.0922 15.4318 13.8139 15.6349 13.496 15.749C13.0223 15.9319 12.5166 16.0176 12.009 16.001C11.4221 16.0236 10.8382 15.9056 10.306 15.657C10.0602 15.5261 9.84907 15.3386 9.69001 15.11C9.57837 14.9637 9.50855 14.7899 9.48801 14.607C9.48801 14.3418 9.38266 14.0874 9.19512 13.8999C9.00758 13.7124 8.75323 13.607 8.48801 13.607C8.2228 13.607 7.96844 13.7124 7.78091 13.8999C7.59337 14.0874 7.48801 14.3418 7.48801 14.607C7.5045 15.1971 7.69824 15.7686 8.04401 16.247C8.38958 16.7447 8.84989 17.1518 9.38601 17.434C10.2017 17.832 11.1017 18.0266 12.009 18.001C12.78 18.0197 13.5468 17.8819 14.263 17.596C14.9288 17.3405 15.5069 16.8986 15.928 16.323C16.3283 15.7623 16.5335 15.0856 16.512 14.397C16.5213 13.8632 16.3921 13.3361 16.137 12.867C15.8906 12.4436 15.5494 12.0831 15.14 11.814V11.813ZM22.361 13.691C22.6306 12.0476 22.5051 10.3636 21.9949 8.77831C21.4846 7.19301 20.6043 5.75197 19.4267 4.57437C18.2491 3.39676 16.808 2.51643 15.2227 2.00617C13.6374 1.49592 11.9534 1.3704 10.31 1.64001C9.09663 1.05823 7.73257 0.867444 6.40612 1.09398C5.07968 1.32052 3.85626 1.95322 2.90474 2.90474C1.95322 3.85626 1.32052 5.07968 1.09398 6.40612C0.867444 7.73257 1.05823 9.09663 1.64001 10.31C1.37063 11.9533 1.49627 13.637 2.00655 15.2221C2.51684 16.8072 3.3971 18.248 4.57456 19.4255C5.75203 20.6029 7.19286 21.4832 8.77793 21.9935C10.363 22.5038 12.0468 22.6294 13.69 22.36C14.9034 22.9418 16.2675 23.1326 17.5939 22.906C18.9203 22.6795 20.1438 22.0468 21.0953 21.0953C22.0468 20.1438 22.6795 18.9203 22.906 17.5939C23.1326 16.2675 22.9418 14.9034 22.36 13.69L22.361 13.691ZM16.5 21C15.7412 20.9997 14.9948 20.8078 14.33 20.442C14.1238 20.3284 13.8841 20.2909 13.653 20.336C12.4206 20.5818 11.149 20.551 9.92986 20.2459C8.71077 19.9407 7.57461 19.3687 6.60333 18.5713C5.63206 17.7738 4.84988 16.7707 4.31323 15.6344C3.77658 14.498 3.49883 13.2567 3.50001 12C3.50104 11.4447 3.55597 10.8907 3.66401 10.346C3.70925 10.1149 3.67173 9.87524 3.55801 9.66901C3.08847 8.81501 2.90886 7.83165 3.0462 6.8668C3.18353 5.90195 3.63039 5.00777 4.31957 4.3187C5.00876 3.62962 5.90302 3.18292 6.86789 3.04574C7.83276 2.90856 8.81609 3.08833 9.67001 3.55801C9.87644 3.67221 10.1166 3.70976 10.348 3.66401C11.5804 3.41837 12.8519 3.44929 14.0709 3.75454C15.2898 4.05979 16.4259 4.63176 17.397 5.4292C18.3682 6.22663 19.1502 7.22966 19.6868 8.36594C20.2234 9.50221 20.5012 10.7434 20.5 12C20.499 12.5554 20.4441 13.1093 20.336 13.654C20.2908 13.8851 20.3283 14.1248 20.442 14.331C20.8192 15.0161 21.0113 15.7877 20.9994 16.5697C20.9875 17.3517 20.7719 18.1171 20.3739 18.7903C19.976 19.4636 19.4094 20.0215 18.73 20.409C18.0507 20.7965 17.2821 21.0002 16.5 21Z" fill="#fff"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.12 5.32003H17V2.14003C16.0897 2.04538 15.1751 1.99865 14.26 2.00003C11.54 2.00003 9.67999 3.66003 9.67999 6.70003V9.32003H6.60999V12.88H9.67999V22H13.36V12.88H16.42L16.88 9.32003H13.36V7.05003C13.36 6.00003 13.64 5.32003 15.12 5.32003Z" fill="#fff"/>
                                </svg>
                            </a>
                        </div>
                        <div class="footer__top_top-right footer__top_top-right_MT">
                            <div class="footer__top_bottom-place">
                                Україна, м. Київ,
                            </div>
                            <div class="footer__top_bottom-place">
                                вул. Юрія Ильєнка 81а
                            </div>
                        </div>
                    </div>
                    <div class="footer__top_mobile">
                        <div class="footer__top_mobile-title">
                            НАШІ СОЦІАЛЬНІ МЕРЕЖІ
                        </div>
                        <div>
                            <a href="#">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.265 1.4279C20.9803 1.19106 20.6367 1.03585 20.2708 0.978796C19.9048 0.921742 19.5303 0.964978 19.187 1.1039L1.266 8.3389C0.882849 8.4966 0.556707 8.76707 0.330839 9.11442C0.104972 9.46177 -0.00994428 9.86959 0.00133764 10.2838C0.0126196 10.6979 0.149566 11.0989 0.394008 11.4334C0.63845 11.768 0.978832 12.0203 1.37 12.1569L4.995 13.4179L7.015 20.0999C7.04268 20.1891 7.08274 20.2739 7.134 20.3519C7.14199 20.3639 7.153 20.3719 7.161 20.3849C7.21993 20.4669 7.29109 20.5394 7.37199 20.5999C7.39458 20.6176 7.41794 20.6343 7.442 20.6499C7.53672 20.7128 7.64159 20.7588 7.752 20.7859L7.765 20.7869L7.771 20.7899C7.83783 20.8033 7.90583 20.81 7.974 20.8099L7.99199 20.8069C8.09441 20.8052 8.19594 20.7877 8.293 20.7549C8.316 20.7469 8.335 20.7349 8.357 20.7249C8.42959 20.6951 8.49841 20.6569 8.562 20.6109C8.61265 20.5679 8.66331 20.5249 8.71399 20.4819L11.416 17.4989L15.446 20.6209C15.8007 20.8972 16.2374 21.0474 16.687 21.0479C17.1582 21.0474 17.615 20.8848 17.9806 20.5875C18.3462 20.2901 18.5984 19.8761 18.695 19.4149L21.958 3.3979C22.0318 3.03756 22.0063 2.66394 21.8842 2.31696C21.7622 1.96998 21.5481 1.66268 21.265 1.4279ZM8.37 13.7359C8.2315 13.8741 8.13688 14.0501 8.09799 14.2419L7.788 15.7459L7.00399 13.1529L11.069 11.0359L8.37 13.7359ZM16.672 19.0399L11.909 15.3499C11.7097 15.1961 11.4598 15.1231 11.209 15.1453C10.9583 15.1675 10.7251 15.2834 10.556 15.4699L9.68999 16.4249L9.996 14.9379L17.079 7.8549C17.2471 7.68582 17.3492 7.46226 17.3669 7.22452C17.3847 6.98679 17.317 6.75053 17.1759 6.55833C17.0349 6.36613 16.8298 6.23064 16.5977 6.17629C16.3656 6.12194 16.1217 6.1523 15.91 6.2619L5.745 11.5539L2.02 10.1909L19.999 2.9999L16.672 19.0399Z" fill="#fff"/>
                                </svg>
                            </a>
                            <a class="footer__top_mobile-svg" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.14 11.813C14.7393 11.5557 14.3044 11.3561 13.848 11.22C13.568 11.135 13.258 11.052 12.938 10.973C12.658 10.895 12.326 10.815 11.916 10.725C11.4267 10.6224 10.9465 10.4806 10.48 10.301C10.2396 10.2076 10.0274 10.0536 9.86401 9.85401C9.74446 9.69067 9.68766 9.48977 9.70401 9.28801C9.70365 9.07168 9.77583 8.86148 9.90901 8.69101C10.0954 8.47267 10.3372 8.30859 10.609 8.21601C11.0661 8.05894 11.5479 7.98577 12.031 8.00001C12.4049 7.99381 12.7776 8.04301 13.137 8.14601C13.3754 8.21308 13.5999 8.32212 13.8 8.46801C13.9294 8.56036 14.0398 8.67683 14.125 8.81101C14.1868 8.92755 14.2709 9.03071 14.3727 9.11458C14.4745 9.19845 14.5919 9.26135 14.718 9.29968C14.8442 9.338 14.9767 9.35099 15.108 9.33789C15.2392 9.32479 15.3665 9.28587 15.4827 9.22336C15.5988 9.16084 15.7014 9.07598 15.7846 8.97365C15.8678 8.87132 15.9299 8.75355 15.9674 8.62711C16.0049 8.50068 16.017 8.36807 16.003 8.23693C15.9891 8.1058 15.9493 7.97872 15.886 7.86301C15.6751 7.49003 15.3903 7.16404 15.049 6.90501C14.6547 6.60208 14.2074 6.37522 13.73 6.23601C13.1789 6.0732 12.6066 5.99366 12.032 6.00001C11.3016 5.98429 10.5745 6.10293 9.88701 6.35001C9.26524 6.57636 8.71905 6.97189 8.31001 7.49201C7.91824 8.00919 7.70615 8.6402 7.70601 9.28901C7.68979 9.93494 7.89439 10.5671 8.28601 11.081C8.6641 11.5572 9.1597 11.9267 9.72401 12.153C10.1504 12.3171 10.587 12.4534 11.031 12.561C11.039 12.564 11.045 12.571 11.053 12.573C11.245 12.631 11.551 12.708 11.993 12.803C12.166 12.841 12.328 12.882 12.49 12.923C12.506 12.927 12.529 12.932 12.544 12.937L12.562 12.939C12.81 13.003 13.049 13.068 13.268 13.135C13.5371 13.2137 13.7939 13.3295 14.031 13.479C14.1789 13.5719 14.3032 13.6979 14.394 13.847C14.4819 14.029 14.5225 14.2302 14.512 14.432C14.5259 14.6932 14.4504 14.9514 14.298 15.164C14.0922 15.4318 13.8139 15.6349 13.496 15.749C13.0223 15.9319 12.5166 16.0176 12.009 16.001C11.4221 16.0236 10.8382 15.9056 10.306 15.657C10.0602 15.5261 9.84907 15.3386 9.69001 15.11C9.57837 14.9637 9.50855 14.7899 9.48801 14.607C9.48801 14.3418 9.38266 14.0874 9.19512 13.8999C9.00758 13.7124 8.75323 13.607 8.48801 13.607C8.2228 13.607 7.96844 13.7124 7.78091 13.8999C7.59337 14.0874 7.48801 14.3418 7.48801 14.607C7.5045 15.1971 7.69824 15.7686 8.04401 16.247C8.38958 16.7447 8.84989 17.1518 9.38601 17.434C10.2017 17.832 11.1017 18.0266 12.009 18.001C12.78 18.0197 13.5468 17.8819 14.263 17.596C14.9288 17.3405 15.5069 16.8986 15.928 16.323C16.3283 15.7623 16.5335 15.0856 16.512 14.397C16.5213 13.8632 16.3921 13.3361 16.137 12.867C15.8906 12.4436 15.5494 12.0831 15.14 11.814V11.813ZM22.361 13.691C22.6306 12.0476 22.5051 10.3636 21.9949 8.77831C21.4846 7.19301 20.6043 5.75197 19.4267 4.57437C18.2491 3.39676 16.808 2.51643 15.2227 2.00617C13.6374 1.49592 11.9534 1.3704 10.31 1.64001C9.09663 1.05823 7.73257 0.867444 6.40612 1.09398C5.07968 1.32052 3.85626 1.95322 2.90474 2.90474C1.95322 3.85626 1.32052 5.07968 1.09398 6.40612C0.867444 7.73257 1.05823 9.09663 1.64001 10.31C1.37063 11.9533 1.49627 13.637 2.00655 15.2221C2.51684 16.8072 3.3971 18.248 4.57456 19.4255C5.75203 20.6029 7.19286 21.4832 8.77793 21.9935C10.363 22.5038 12.0468 22.6294 13.69 22.36C14.9034 22.9418 16.2675 23.1326 17.5939 22.906C18.9203 22.6795 20.1438 22.0468 21.0953 21.0953C22.0468 20.1438 22.6795 18.9203 22.906 17.5939C23.1326 16.2675 22.9418 14.9034 22.36 13.69L22.361 13.691ZM16.5 21C15.7412 20.9997 14.9948 20.8078 14.33 20.442C14.1238 20.3284 13.8841 20.2909 13.653 20.336C12.4206 20.5818 11.149 20.551 9.92986 20.2459C8.71077 19.9407 7.57461 19.3687 6.60333 18.5713C5.63206 17.7738 4.84988 16.7707 4.31323 15.6344C3.77658 14.498 3.49883 13.2567 3.50001 12C3.50104 11.4447 3.55597 10.8907 3.66401 10.346C3.70925 10.1149 3.67173 9.87524 3.55801 9.66901C3.08847 8.81501 2.90886 7.83165 3.0462 6.8668C3.18353 5.90195 3.63039 5.00777 4.31957 4.3187C5.00876 3.62962 5.90302 3.18292 6.86789 3.04574C7.83276 2.90856 8.81609 3.08833 9.67001 3.55801C9.87644 3.67221 10.1166 3.70976 10.348 3.66401C11.5804 3.41837 12.8519 3.44929 14.0709 3.75454C15.2898 4.05979 16.4259 4.63176 17.397 5.4292C18.3682 6.22663 19.1502 7.22966 19.6868 8.36594C20.2234 9.50221 20.5012 10.7434 20.5 12C20.499 12.5554 20.4441 13.1093 20.336 13.654C20.2908 13.8851 20.3283 14.1248 20.442 14.331C20.8192 15.0161 21.0113 15.7877 20.9994 16.5697C20.9875 17.3517 20.7719 18.1171 20.3739 18.7903C19.976 19.4636 19.4094 20.0215 18.73 20.409C18.0507 20.7965 17.2821 21.0002 16.5 21Z" fill="#fff"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.12 5.32003H17V2.14003C16.0897 2.04538 15.1751 1.99865 14.26 2.00003C11.54 2.00003 9.67999 3.66003 9.67999 6.70003V9.32003H6.60999V12.88H9.67999V22H13.36V12.88H16.42L16.88 9.32003H13.36V7.05003C13.36 6.00003 13.64 5.32003 15.12 5.32003Z" fill="#fff"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer__bottom_mobile">
                        <div class="footer__top_mobile-title">
                            АДРЕСА
                        </div>
                        <div class="footer__bottom_mobile-sub-wrapper">
                            <div class="footer__bottom_mobile-sub">Україна, м. Київ,</div>
                            <div class="footer__bottom_mobile-sub">
                                вул. Юрія Ильєнка 81а
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer__separator"></div>
            <div class="footer__bottom">
                2021 | All rights protected
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/app.js"></script>
</div>
</body>
</html>
