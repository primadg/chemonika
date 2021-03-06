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
                Вихід
                <img src="{{env('APP_URL')}}/img/icons/posts/arrow.svg" alt="arrow">
            </div>
        </div>
    </div>
</header>
<section class="groupsAdmin">
    <div class="container">
        <div class="contactsAdmin__header">
            <div class="groupsAdmin__title">Контакти</div>
            <div class="contactsAdmin__header_wrapper">
                <div onclick="location.href='{{env("APP_URL")."/en"}}'"  class="contactsAdmin__lang @if($lang=="en") contactsAdmin__lang_active  @endif" >Eng</div>
                <div onclick="location.href='{{env("APP_URL")."/ru"}}'"  class="contactsAdmin__lang @if($lang=="ru") contactsAdmin__lang_active  @endif">Руc</div>
                <div onclick="location.href='{{env("APP_URL")."/ukr"}}'"  class="contactsAdmin__lang @if($lang=="ukr") contactsAdmin__lang_active  @endif">Укр</div>
            </div>
        </div>
        <form action="{{env('APP_URL')}}/save_contact" method="POST">
            @csrf
            <div class="contactsAdmin__row">
                <div class="contactsAdmin__mainBlock">
                    <div class="contactsAdmin__mainBlock_title">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4582 10.9603C17.2382 10.9603 17.0082 10.8903 16.7882 10.8403C16.3427 10.7421 15.9048 10.6118 15.4782 10.4503C15.0143 10.2815 14.5043 10.2903 14.0465 10.4749C13.5886 10.6595 13.2153 11.007 12.9982 11.4503L12.7782 11.9003C11.8042 11.3585 10.9092 10.6855 10.1182 9.90032C9.33294 9.10933 8.65999 8.21431 8.11817 7.24032L8.53817 6.96032C8.98153 6.74323 9.32895 6.36985 9.51356 5.91201C9.69817 5.45417 9.70694 4.94423 9.53817 4.48032C9.37939 4.05274 9.2491 3.61512 9.14817 3.17032C9.09817 2.95032 9.05817 2.72032 9.02817 2.49032C8.90673 1.78594 8.53779 1.14806 7.98779 0.691557C7.43779 0.235054 6.74286 -0.0100738 6.02817 0.000317303H3.02817C2.5972 -0.00372924 2.17042 0.0851307 1.77688 0.260848C1.38334 0.436565 1.03228 0.695013 0.747598 1.0186C0.462918 1.34219 0.251302 1.72331 0.127155 2.13603C0.00300869 2.54875 -0.0307535 2.98338 0.0281672 3.41032C0.560905 7.5997 2.4742 11.4922 5.46582 14.473C8.45744 17.4537 12.3569 19.3528 16.5482 19.8703H16.9282C17.6656 19.8714 18.3776 19.6008 18.9282 19.1103C19.2445 18.8274 19.4973 18.4805 19.6696 18.0926C19.842 17.7048 19.9301 17.2848 19.9282 16.8603V13.8603C19.9159 13.1657 19.663 12.4969 19.2125 11.968C18.762 11.4391 18.142 11.0829 17.4582 10.9603ZM17.9582 16.9603C17.958 17.1023 17.9276 17.2426 17.8689 17.3719C17.8103 17.5013 17.7248 17.6166 17.6182 17.7103C17.5064 17.8068 17.3758 17.8789 17.2346 17.9219C17.0934 17.965 16.9447 17.978 16.7982 17.9603C13.0531 17.4801 9.5744 15.7668 6.91088 13.0906C4.24736 10.4144 2.55058 6.92765 2.08817 3.18032C2.07225 3.03384 2.0862 2.88565 2.12917 2.74471C2.17214 2.60377 2.24324 2.473 2.33817 2.36032C2.43188 2.25365 2.54723 2.16816 2.67655 2.10953C2.80586 2.05091 2.94618 2.0205 3.08817 2.02032H6.08817C6.32071 2.01514 6.54779 2.0912 6.73031 2.23539C6.91283 2.37958 7.03938 2.58289 7.08817 2.81032C7.12817 3.08365 7.17817 3.35365 7.23817 3.62032C7.35369 4.14746 7.50743 4.6655 7.69817 5.17032L6.29817 5.82032C6.17846 5.87524 6.07079 5.95326 5.98132 6.04991C5.89186 6.14656 5.82237 6.25993 5.77684 6.38351C5.73131 6.50709 5.71064 6.63845 5.71601 6.77004C5.72139 6.90163 5.75271 7.03086 5.80817 7.15032C7.24737 10.2331 9.72541 12.7111 12.8082 14.1503C13.0516 14.2503 13.3247 14.2503 13.5682 14.1503C13.6929 14.1057 13.8075 14.0368 13.9053 13.9475C14.0032 13.8582 14.0823 13.7504 14.1382 13.6303L14.7582 12.2303C15.2751 12.4152 15.8028 12.5688 16.3382 12.6903C16.6048 12.7503 16.8748 12.8003 17.1482 12.8403C17.3756 12.8891 17.5789 13.0157 17.7231 13.1982C17.8673 13.3807 17.9433 13.6078 17.9382 13.8403L17.9582 16.9603Z" fill="#219653"/>
                        </svg>
                        <span>Телефони</span>
                    </div>
                    <div class="contactsAdmin__addContact contactsAdmin__addContact_invisible">
                        <div class="contactsAdmin__label">Телефон № number</div>
                        <div class="contactsAdmin__relative">
                            <input name="tel" class="contactsAdmin__input" readonly placeholder="Телефон № number" value="">
                            <div class="contactsAdmin__relative_actions">
                                <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">
                                <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">
                            </div>
                        </div>
                    </div>

                    @foreach($tels as $key=> $tel)
                    <div class="contactsAdmin__label">Телефон №{{$key+1}}</div>
                    <div class="contactsAdmin__relative">
                        <input name="tel" class="contactsAdmin__input contactsAdmin__input_tel" readonly placeholder="Телефон №1" value="{{$tel}}">
                        <div class="contactsAdmin__relative_actions">
                            <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">
                            <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="contactsAdmin__label">Телефон №2</div>--}}
{{--                    <div class="contactsAdmin__relative">--}}
{{--                        <input name="tel2" class="contactsAdmin__input contactsAdmin__input_tel" readonly placeholder="Телефон №2" value="{{$contact->tel2}}">--}}
{{--                        <div class="contactsAdmin__relative_actions">--}}
{{--                            <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">--}}
{{--                            <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <input name="telData" type="hidden" id="telAll">
                    <div class="contactsAdmin__addBtn">
                        <div>Добавить телефон</div>
                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.28323 0.712379L5.85891 0.712378L5.85891 6.35913L0.212158 6.35913V7.78345L5.85891 7.78345L5.85891 13.4302L7.28323 13.4302L7.28323 7.78345L12.93 7.78345V6.35913L7.28323 6.35913L7.28323 0.712379Z" fill="#219653"/>
                        </svg>
                    </div>
                </div>
                <div class="contactsAdmin__mainBlock">
                    <div class="contactsAdmin__mainBlock_title">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2 0.799805H1.80003H0.0090332V15.1998H1.80003H16.2H18V0.799805H16.2ZM1.80003 4.3998L9.00003 8.89981L16.2 4.3998V13.3998H1.80003V4.3998ZM1.80003 2.5998L9.00003 7.0998L16.2 2.5998H1.80003Z" fill="#219653"/>
                        </svg>
                        <span>Електронна пошта</span>
                    </div>
                    <div class="contactsAdmin__addContact contactsAdmin__addContact_invisible">
                        <div class="contactsAdmin__label">Пошта № number</div>
                        <div class="contactsAdmin__relative">
                            <input name="tel" class="contactsAdmin__input" readonly placeholder="Пошта № number" value="">
                            <div class="contactsAdmin__relative_actions">
                                <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">
                                <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">
                            </div>
                        </div>
                    </div>
                    @foreach($emails as $key => $email)
                    <div class="contactsAdmin__label">Пошта №{{$key}}</div>
                    <div class="contactsAdmin__relative">
                        <input name="email1" class="contactsAdmin__input contactsAdmin__input_email" readonly placeholder="Пошта №1" value="{{$email}}">
                        <div class="contactsAdmin__relative_actions">
                            <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">
                            <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="contactsAdmin__label">Пошта №2</div>--}}
{{--                    <div class="contactsAdmin__relative">--}}
{{--                        <input name="email2" class="contactsAdmin__input contactsAdmin__input_email" readonly placeholder="Пошта №2" value="{{$contact->email2}}">--}}
{{--                        <div class="contactsAdmin__relative_actions">--}}
{{--                            <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">--}}
{{--                            <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <input name="emailData" type="hidden" id="emailAll">
                    <div class="contactsAdmin__addBtn">
                        <div>Добавить email</div>
                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.28323 0.712379L5.85891 0.712378L5.85891 6.35913L0.212158 6.35913V7.78345L5.85891 7.78345L5.85891 13.4302L7.28323 13.4302L7.28323 7.78345L12.93 7.78345V6.35913L7.28323 6.35913L7.28323 0.712379Z" fill="#219653"/>
                        </svg>
                    </div>
                </div>
                <div class="contactsAdmin__mainBlock">
                    <div class="contactsAdmin__mainBlock_title">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 13.4 7.05 19.5 7.35 19.76C7.53113 19.9149 7.76165 20.0001 8 20.0001C8.23835 20.0001 8.46887 19.9149 8.65 19.76C9 19.5 16 13.4 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0ZM8 17.65C5.87 15.65 2 11.34 2 8C2 6.4087 2.63214 4.88258 3.75736 3.75736C4.88258 2.63214 6.4087 2 8 2C9.5913 2 11.1174 2.63214 12.2426 3.75736C13.3679 4.88258 14 6.4087 14 8C14 11.34 10.13 15.66 8 17.65ZM8 4C7.20887 4 6.43552 4.2346 5.77772 4.67412C5.11992 5.11365 4.60723 5.73836 4.30448 6.46927C4.00173 7.20017 3.92252 8.00444 4.07686 8.78036C4.2312 9.55628 4.61216 10.269 5.17157 10.8284C5.73098 11.3878 6.44371 11.7688 7.21964 11.9231C7.99556 12.0775 8.79983 11.9983 9.53073 11.6955C10.2616 11.3928 10.8864 10.8801 11.3259 10.2223C11.7654 9.56448 12 8.79113 12 8C12 6.93913 11.5786 5.92172 10.8284 5.17157C10.0783 4.42143 9.06087 4 8 4ZM8 10C7.60444 10 7.21776 9.8827 6.88886 9.66294C6.55996 9.44318 6.30362 9.13082 6.15224 8.76537C6.00087 8.39991 5.96126 7.99778 6.03843 7.60982C6.1156 7.22186 6.30608 6.86549 6.58579 6.58579C6.86549 6.30608 7.22186 6.1156 7.60982 6.03843C7.99778 5.96126 8.39991 6.00087 8.76537 6.15224C9.13082 6.30362 9.44318 6.55996 9.66294 6.88886C9.8827 7.21776 10 7.60444 10 8C10 8.53043 9.78929 9.03914 9.41421 9.41421C9.03914 9.78929 8.53043 10 8 10Z" fill="#219653"/>
                        </svg>
                        <span>Адреса</span>
                    </div>
                    <textarea name="adrs" class="contactsAdmin__input contactsAdmin__mainBlock_textarrea" placeholder="Адреса">{{$contact->adrs}}</textarea>
                </div>
                <div class="contactsAdmin__mainBlock">
                    <div class="contactsAdmin__mainBlock_title">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 13.4 7.05 19.5 7.35 19.76C7.53113 19.9149 7.76165 20.0001 8 20.0001C8.23835 20.0001 8.46887 19.9149 8.65 19.76C9 19.5 16 13.4 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0ZM8 17.65C5.87 15.65 2 11.34 2 8C2 6.4087 2.63214 4.88258 3.75736 3.75736C4.88258 2.63214 6.4087 2 8 2C9.5913 2 11.1174 2.63214 12.2426 3.75736C13.3679 4.88258 14 6.4087 14 8C14 11.34 10.13 15.66 8 17.65ZM8 4C7.20887 4 6.43552 4.2346 5.77772 4.67412C5.11992 5.11365 4.60723 5.73836 4.30448 6.46927C4.00173 7.20017 3.92252 8.00444 4.07686 8.78036C4.2312 9.55628 4.61216 10.269 5.17157 10.8284C5.73098 11.3878 6.44371 11.7688 7.21964 11.9231C7.99556 12.0775 8.79983 11.9983 9.53073 11.6955C10.2616 11.3928 10.8864 10.8801 11.3259 10.2223C11.7654 9.56448 12 8.79113 12 8C12 6.93913 11.5786 5.92172 10.8284 5.17157C10.0783 4.42143 9.06087 4 8 4ZM8 10C7.60444 10 7.21776 9.8827 6.88886 9.66294C6.55996 9.44318 6.30362 9.13082 6.15224 8.76537C6.00087 8.39991 5.96126 7.99778 6.03843 7.60982C6.1156 7.22186 6.30608 6.86549 6.58579 6.58579C6.86549 6.30608 7.22186 6.1156 7.60982 6.03843C7.99778 5.96126 8.39991 6.00087 8.76537 6.15224C9.13082 6.30362 9.44318 6.55996 9.66294 6.88886C9.8827 7.21776 10 7.60444 10 8C10 8.53043 9.78929 9.03914 9.41421 9.41421C9.03914 9.78929 8.53043 10 8 10Z" fill="#219653"/>
                        </svg>
                        <span>Соціальні мережі</span>
                    </div>
                    <div class="contactsAdmin__mainBlock_social contactsAdmin__mainBlock_social-fc">
                        <div class="contactsAdmin__mainBlock_social-imageWrapper">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2649 1.42766C20.9802 1.19082 20.6366 1.03561 20.2707 0.978552C19.9047 0.921497 19.5302 0.964734 19.1869 1.10366L1.2659 8.33866C0.882757 8.49636 0.556615 8.76682 0.330748 9.11418C0.10488 9.46153 -0.0100358 9.86935 0.00124609 10.2835C0.012528 10.6977 0.149474 11.0987 0.393916 11.4332C0.638358 11.7677 0.978741 12.0201 1.3699 12.1567L4.9949 13.4177L7.0149 20.0997C7.04259 20.1888 7.08265 20.2736 7.1339 20.3517C7.1419 20.3637 7.1529 20.3717 7.1609 20.3847C7.21983 20.4667 7.29099 20.5392 7.3719 20.5997C7.39449 20.6173 7.41784 20.634 7.4419 20.6497C7.53662 20.7125 7.6415 20.7585 7.7519 20.7857L7.7649 20.7867L7.7709 20.7897C7.83773 20.8031 7.90574 20.8098 7.9739 20.8097L7.9919 20.8067C8.09432 20.805 8.19585 20.7874 8.2929 20.7547C8.3159 20.7467 8.3349 20.7347 8.3569 20.7247C8.4295 20.6949 8.49831 20.6566 8.5619 20.6107C8.61255 20.5676 8.66322 20.5246 8.7139 20.4817L11.4159 17.4987L15.4459 20.6207C15.8006 20.8969 16.2373 21.0472 16.6869 21.0477C17.1581 21.0471 17.6149 20.8845 17.9805 20.5872C18.3461 20.2899 18.5983 19.8759 18.6949 19.4147L21.9579 3.39766C22.0317 3.03732 22.0062 2.66369 21.8842 2.31671C21.7621 1.96973 21.5481 1.66243 21.2649 1.42766ZM8.3699 13.7357C8.23141 13.8739 8.13679 14.0499 8.0979 14.2417L7.7879 15.7457L7.0039 13.1527L11.0689 11.0357L8.3699 13.7357ZM16.6719 19.0397L11.9089 15.3497C11.7096 15.1959 11.4597 15.1228 11.2089 15.1451C10.9582 15.1673 10.725 15.2832 10.5559 15.4697L9.6899 16.4247L9.9959 14.9377L17.0789 7.85466C17.247 7.68557 17.3491 7.46201 17.3669 7.22428C17.3846 6.98655 17.3169 6.75028 17.1759 6.55809C17.0348 6.36589 16.8297 6.2304 16.5976 6.17605C16.3655 6.1217 16.1216 6.15206 15.9099 6.26166L5.7449 11.5537L2.0199 10.1907L19.9989 2.99966L16.6719 19.0397Z" fill="#263640"/>
                            </svg>
                        </div>
                        <div class="contactsAdmin__relative contactsAdmin__relative_social">
                            <input type="text" name="link_tg" readonly class="contactsAdmin__input" value="{{$contact->link_tg}}" placeholder="link">
                            <div class="contactsAdmin__relative_actions">
                                <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">
                                <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">
                            </div>
                        </div>
                    </div>
                    <div class="contactsAdmin__mainBlock_social">
                        <div class="contactsAdmin__mainBlock_social-imageWrapper">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.14 10.8128C13.7393 10.5555 13.3044 10.3559 12.848 10.2198C12.568 10.1348 12.258 10.0518 11.938 9.97277C11.658 9.89477 11.326 9.81477 10.916 9.72477C10.4267 9.6222 9.94653 9.48041 9.48001 9.30077C9.23958 9.20737 9.02738 9.05338 8.86401 8.85377C8.74446 8.69043 8.68766 8.48953 8.70401 8.28777C8.70365 8.07144 8.77583 7.86124 8.90901 7.69077C9.09544 7.47243 9.33725 7.30834 9.60901 7.21577C10.0661 7.0587 10.5479 6.98552 11.031 6.99977C11.4049 6.99357 11.7776 7.04277 12.137 7.14577C12.3754 7.21284 12.5999 7.32188 12.8 7.46777C12.9294 7.56012 13.0398 7.67658 13.125 7.81077C13.1868 7.9273 13.2709 8.03047 13.3727 8.11434C13.4745 8.1982 13.5919 8.26111 13.718 8.29943C13.8442 8.33776 13.9767 8.35075 14.108 8.33765C14.2392 8.32455 14.3665 8.28562 14.4827 8.22311C14.5988 8.1606 14.7014 8.07574 14.7846 7.97341C14.8678 7.87108 14.9299 7.75331 14.9674 7.62687C15.0049 7.50043 15.017 7.36783 15.003 7.23669C14.9891 7.10555 14.9493 6.97847 14.886 6.86277C14.6751 6.48979 14.3903 6.16379 14.049 5.90477C13.6547 5.60184 13.2074 5.37497 12.73 5.23577C12.1789 5.07296 11.6066 4.99342 11.032 4.99977C10.3016 4.98405 9.57454 5.10269 8.88701 5.34977C8.26524 5.57612 7.71905 5.97165 7.31001 6.49177C6.91824 7.00895 6.70615 7.63995 6.70601 8.28877C6.68979 8.9347 6.89439 9.56684 7.28601 10.0808C7.6641 10.5569 8.1597 10.9264 8.72401 11.1528C9.15042 11.3168 9.587 11.4531 10.031 11.5608C10.039 11.5638 10.045 11.5708 10.053 11.5728C10.245 11.6308 10.551 11.7078 10.993 11.8028C11.166 11.8408 11.328 11.8818 11.49 11.9228C11.506 11.9268 11.529 11.9318 11.544 11.9368L11.562 11.9388C11.81 12.0028 12.049 12.0678 12.268 12.1348C12.5371 12.2135 12.7939 12.3293 13.031 12.4788C13.1789 12.5717 13.3032 12.6976 13.394 12.8468C13.4819 13.0287 13.5225 13.2299 13.512 13.4318C13.5259 13.693 13.4504 13.9511 13.298 14.1638C13.0922 14.4316 12.8139 14.6346 12.496 14.7488C12.0223 14.9316 11.5166 15.0173 11.009 15.0008C10.4221 15.0233 9.8382 14.9054 9.30601 14.6568C9.06021 14.5259 8.84907 14.3384 8.69001 14.1098C8.57837 13.9635 8.50855 13.7896 8.48801 13.6068C8.48801 13.3416 8.38266 13.0872 8.19512 12.8997C8.00758 12.7121 7.75323 12.6068 7.48801 12.6068C7.2228 12.6068 6.96844 12.7121 6.78091 12.8997C6.59337 13.0872 6.48801 13.3416 6.48801 13.6068C6.5045 14.1969 6.69824 14.7683 7.04401 15.2468C7.38958 15.7444 7.84989 16.1516 8.38601 16.4338C9.20174 16.8318 10.1017 17.0263 11.009 17.0008C11.78 17.0194 12.5468 16.8817 13.263 16.5958C13.9288 16.3403 14.5069 15.8983 14.928 15.3228C15.3283 14.762 15.5335 14.0854 15.512 13.3968C15.5213 12.8629 15.3921 12.3358 15.137 11.8668C14.8907 11.4433 14.5494 11.0829 14.14 10.8138V10.8128ZM21.361 12.6908C21.6306 11.0474 21.5051 9.36336 20.9949 7.77806C20.4846 6.19277 19.6043 4.75173 18.4267 3.57412C17.2491 2.39652 15.808 1.51618 14.2227 1.00593C12.6374 0.495672 10.9534 0.370159 9.31001 0.639769C8.09663 0.0579883 6.73257 -0.1328 5.40612 0.0937402C4.07968 0.32028 2.85626 0.952976 1.90474 1.9045C0.953221 2.85601 0.320524 4.07943 0.0939843 5.40588C-0.132556 6.73232 0.0582325 8.09638 0.640013 9.30977C0.370626 10.953 0.496269 12.6368 1.00655 14.2219C1.51684 15.8069 2.3971 17.2478 3.57456 18.4252C4.75203 19.6027 6.19286 20.4829 7.77793 20.9932C9.363 21.5035 11.0468 21.6292 12.69 21.3598C13.9034 21.9416 15.2675 22.1323 16.5939 21.9058C17.9203 21.6793 19.1438 21.0466 20.0953 20.095C21.0468 19.1435 21.6795 17.9201 21.906 16.5937C22.1326 15.2672 21.9418 13.9032 21.36 12.6898L21.361 12.6908ZM15.5 19.9998C14.7412 19.9994 13.9948 19.8075 13.33 19.4418C13.1238 19.3281 12.8841 19.2906 12.653 19.3358C11.4206 19.5816 10.149 19.5508 8.92986 19.2456C7.71077 18.9404 6.57461 18.3685 5.60333 17.571C4.63206 16.7736 3.84988 15.7705 3.31323 14.6341C2.77658 13.4978 2.49883 12.2565 2.50001 10.9998C2.50104 10.4444 2.55597 9.8905 2.66401 9.34577C2.70925 9.11466 2.67173 8.87499 2.55801 8.66877C2.08847 7.81477 1.90886 6.83141 2.0462 5.86656C2.18353 4.90171 2.63039 4.00752 3.31957 3.31845C4.00876 2.62938 4.90302 2.18267 5.86789 2.04549C6.83276 1.90832 7.81609 2.08808 8.67001 2.55777C8.87644 2.67197 9.11658 2.70951 9.34801 2.66377C10.5804 2.41813 11.8519 2.44905 13.0709 2.7543C14.2898 3.05955 15.4259 3.63152 16.397 4.42895C17.3682 5.22639 18.1502 6.22942 18.6868 7.36569C19.2234 8.50197 19.5012 9.74317 19.5 10.9998C19.499 11.5551 19.4441 12.109 19.336 12.6538C19.2908 12.8849 19.3283 13.1245 19.442 13.3308C19.8192 14.0159 20.0113 14.7875 19.9994 15.5695C19.9875 16.3514 19.7719 17.1168 19.3739 17.7901C18.976 18.4633 18.4094 19.0212 17.73 19.4087C17.0507 19.7962 16.2821 19.9999 15.5 19.9998Z" fill="#263640"/>
                            </svg>
                        </div>
                        <div class="contactsAdmin__relative contactsAdmin__relative_social">
                            <input type="text" name="link_skype" class="contactsAdmin__input" readonly value="{{$contact->link_skype}}" placeholder="link">
                            <div class="contactsAdmin__relative_actions">
                                <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">
                                <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">
                            </div>
                        </div>
                    </div>
                    <div class="contactsAdmin__mainBlock_social">
                        <div class="contactsAdmin__mainBlock_social-imageWrapper">
                            <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.12011 3.32003H11.0001V0.14003C10.0899 0.045377 9.17526 -0.00135428 8.26011 2.98641e-05C5.54011 2.98641e-05 3.68011 1.66003 3.68011 4.70003V7.32003H0.610107V10.88H3.68011V20H7.36011V10.88H10.4201L10.8801 7.32003H7.36011V5.05003C7.36011 4.00003 7.64011 3.32003 9.12011 3.32003Z" fill="#263640"/>
                            </svg>
                        </div>
                        <div class="contactsAdmin__relative contactsAdmin__relative_social">
                            <input type="text" name="link_facebook" class="contactsAdmin__input" readonly value="{{$contact->link_facebook}}" placeholder="link">
                            <div class="contactsAdmin__relative_actions">
                                <img class="contactsAdmin__relative_action-edit" src="{{env('APP_URL')}}/img/icons/posts/edit.svg" alt="arrow">
                                <img class="contactsAdmin__relative_action-delete" src="{{env('APP_URL')}}/img/icons/posts/close.svg" alt="arrow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="contactsAdmin__btn">
                <span>Зберегти зміни</span>
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.5 0L7.09 1.41L12.67 7H0.5V9H12.67L7.09 14.59L8.5 16L16.5 8L8.5 0Z" fill="#219653"/>
                </svg>
            </button>
        </form>
    </div>
</section>

@include("admin/footer", ["contact"=>$contact_ukr])
<script>


    // let langBtns = document.querySelectorAll('.contactsAdmin__lang');
    // langBtns.forEach(item => {
    //     item.onclick = (e) => {
    //         langBtns.forEach(item => item.classList.remove("contactsAdmin__lang_active"))
    //         e.currentTarget.classList.add('contactsAdmin__lang_active');
    //     };
    // });

    // let editableInput = document.querySelectorAll('.contactsAdmin__relative_action-edit');
    // let deleteInput = document.querySelectorAll('.contactsAdmin__relative_action-delete');

    // let actionInput = document.querySelectorAll('.contactsAdmin__mainBlock');
    // console.log(actionInput);

    // actionInput.forEach(item=>{
    //     item.onclick = (e) =>{
    //         let input = e.target.closest('.contactsAdmin__relative').querySelector('input');
    //         if(e.target == editableInput){
    //             input.classList.add('border__green');
    //             input.removeAttribute('readonly');
    //         }else if(e.target == deleteInput){
    //             let input = e.target.closest('.contactsAdmin__relative').querySelector('input');
    //             input.value = '';
    //         }
    //     }
    // });


    let allBlocks = document.querySelectorAll('.contactsAdmin__mainBlock');
    allBlocks.forEach(item => {
        item.onclick = (e) => {
            console.log(e.target);
            if(e.target.classList.contains('contactsAdmin__relative_action-edit')){
                let input = e.target.closest('.contactsAdmin__relative').querySelector('input');
                input.classList.add('border__green');
                input.removeAttribute('readonly');
            }else if(e.target.classList.contains('contactsAdmin__relative_action-delete')){
                let input = e.target.closest('.contactsAdmin__relative').querySelector('input');
                input.value = '';
                dataCollection();
            }
        }
    });

    // editableInput.forEach(item => {
    //     item.onclick = (e) => {
    //         let input = e.target.closest('.contactsAdmin__relative').querySelector('input');
    //         input.classList.add('border__green');
    //         input.removeAttribute('readonly');
    //     }
    // });

    // deleteInput.forEach(item => {
    //     item.onclick = (e) => {
    //         let input = e.target.closest('.contactsAdmin__relative').querySelector('input');
    //         input.value = '';
    //     }
    // });

    let addBtn = document.querySelectorAll('.contactsAdmin__addBtn');
    addBtn.forEach(item => {
        item.onclick = (e) => {
            let parentBlock = e.target.closest('.contactsAdmin__mainBlock');
            let clonnedNode = parentBlock.querySelector('.contactsAdmin__addContact_invisible').cloneNode(true);
            //Подсчет элементов до
            let amountElements = parentBlock.querySelectorAll('.contactsAdmin__relative').length;
            if(item.querySelector('div').textContent == "Добавить телефон"){
                clonnedNode.querySelector('.contactsAdmin__label').innerText = `Телефон №${amountElements}`;
                clonnedNode.querySelector('input').setAttribute('placeholder', `Телефон №${amountElements}`);
                clonnedNode.querySelector('input').classList.add('contactsAdmin__input_tel');

            }else{
                clonnedNode.querySelector('.contactsAdmin__label').innerText = `Пошта №${amountElements}`;
                clonnedNode.querySelector('input').setAttribute('placeholder', `Пошта №${amountElements}`);
                clonnedNode.querySelector('input').classList.add('contactsAdmin__input_email');
            }
            clonnedNode.classList.remove('contactsAdmin__addContact_invisible');
            parentBlock.insertBefore(clonnedNode, item);
        };

    });

</script>
<script>
    dataCollection();
    function dataCollection(){
        const tel = document.querySelectorAll(".contactsAdmin__input_tel");
        let telArr={};
        tel.forEach((el,i) => {
            if(el.value!=="") telArr[i]=el.value;
        });
        document.querySelector("#telAll").value=JSON.stringify(telArr);

        const email = document.querySelectorAll(".contactsAdmin__input_email");
        let emailArr={};
        email.forEach((el,i) => {
            if(el.value!=="") emailArr[i]=el.value;
        });
        document.querySelector("#emailAll").value=JSON.stringify(emailArr);
    }


    function handle(event) {
        if (event.target.tagName === 'INPUT') {
            dataCollection();
        }
    }

    document.querySelector('form').addEventListener('change', handle);
    document.querySelector('form').addEventListener('input', handle);
</script>
</body>
</html>
