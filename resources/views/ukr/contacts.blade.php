<section id="about__form" class="form">
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
                        <a href="callto: {{$contact->tel1}}">{{$contact->tel1}}</a>
                    </div>
                </div>
                <div class="form__row_wrapper form__row_wrapper-MT">
                    <div>
                        <img style="opacity: 0" src="img/icons/phone.svg" alt="phone">
                    </div>


                    <div class="form__row_wrapper-title form__row_wrapper-title-PL">
                        <a href="{{$contact->tel2}}"> {{$contact->tel2}}</a>
                    </div>
                </div>

                <div class="form__row_wrapper form__row_wrapper-MT">
                    <div>
                        <img src="img/icons/mail.svg" alt="mail">
                    </div>


                    <div class="form__row_wrapper-title form__row_wrapper-title-PL">
                        <a href="mailto: akabanov@chemonika.com.ua">   {{$contact->email1}}</a>
                    </div>
                </div>
                <div class="form__row_wrapper form__row_wrapper-MT">
                    <div>
                        <img style="opacity: 0" src="img/icons/mail.svg" alt="mail">
                    </div>


                    <div class="form__row_wrapper-title form__row_wrapper-title-PL">
                        <a href="mailto: akabanov@chemonika.com.ua">{{$contact->email2}}</a>
                    </div>
                </div>
                <div style="margin-top: 45px" class="form__row_wrapper">
                    <div>
                        <img src="img/icons/location.svg" alt="location">
                    </div>
                    <div class="form__row_wrapper-title">
                        {{$contact->adrs}}
                    </div>
                </div>
                <div class="form__row_links">
                    <a href="{{$contact->link_tg}}">
                        <img src="img/icons/telegram.svg" alt="telegram">
                    </a>
                    <a class="form__row_links-skype" href="{{$contact->link_skype}}">
                        <img src="img/icons/skype.svg" alt="skype">
                    </a>
                    <a href="{{$contact->link_facebook}}">
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
                    <img class="form__form_check success__form default__form-hidden" src="img/icons/check.svg"
                         alt="banner">
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
                    <input class="form__form_input default__form" required id="nameInput" type="text"
                           name="userName">
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
                    <button id="formSend"
                            class="header__info_button form__form_btn form__form_btn-form default__form">
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
