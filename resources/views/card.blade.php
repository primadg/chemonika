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
    <link rel="stylesheet" href="css/card.min.css">
    <title>Login</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="wrapper">
            <div class="header__logo">
                <img src="img/icons/posts/logo.svg" alt="logo">
                <div class="header__plus">
                    ADMIN
                </div>
            </div>
            <div class="header__button">
                Exit
                <img src="img/icons/posts/arrow.svg" alt="arrow">
            </div>
        </div>
    </div>
</header>
<section class="card">
    <div class="container">
        <a href="#" class="card__wrapper">
            <img src="img/icons/card/chevron.svg" alt="back">
            <div class="card__back">back to Admin panel</div>
        </a>
        <div class="card__language">
            <div class="card__title">Языковые версии</div>
            <div class="card__tabs">
                <div class="card__tabs_tab">Eng</div>
                <div class="card__tabs_tab card__tabs_tab-active">Руc</div>
                <div class="card__tabs_tab">Укр</div>
            </div>
        </div>
        <div class="card__content">
            <div class="card__name">
                <div class="card__content_title">Название</div>
                <input class="card__content_input" value="Лимонная кислота (антиоксиданты)" type="text">
            </div>
            <div class="card__groupWrap">
                <div class="card__group">
                    <div class="card__content_title">Группа</div>
                    <input class="card__content_input" value="Антиоксиданты" type="text">
                </div>
                <div class="card__application">
                    <div class="card__content_title">Область применения</div>
                    <input class="card__content_input" value="Молочная" type="text">
                </div>
            </div>
        </div>
        <div class="card__groupWrap card__download">
            <div class="card__group">
                <label class="card__upload">
                    <span>Download image</span>
                    <img src="img/icons/card/upload.svg" alt="upload">
                    <input type="file" id="myFile" name="filename">
                </label>
            </div>
            <div class="card__group">
                <img class="card__upload_img" src="img/images/card/card.png" alt="card">
                <div class="card__upload_name">
                    <div class="card__upload_name-name">
                        limon.jpg
                    </div>
                    <div class="card__upload_name-size">
                        24 kB
                    </div>
                    <div class="card__upload_name-close">
                        <img src="img/icons/card/close.svg" alt="close.svg">
                    </div>
                </div>
            </div>

        </div>
        <div class="card__content_title">Описание товара</div>
        <textarea class="card__descr" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>В пищевой промышленности лимонная кислота (Е330)  широко применяется  в производстве безалкогольных напитков, поскольку обладает наиболее мягким и освежающим вкусом по сравнению с другими пищевыми кислотами.В производстве кондитерских изделий применяется как ароматизатор и подкислитель. В производстве хлебобулочных изделий применяется как один из компонентов разрыхлителей теста. В масложировой промышленности лимонная кислота значительно снижает вероятность прогоркания жиров, маргаринов и животного масла. При производстве консервов используется, как консервант.Все известные организации по контролю за пищевыми продуктами относят пищевую добавку Е330 к классу безопасных для здоровья.</textarea>
        <div class="card__content_title">Применение продукта</div>
        <textarea class="card__descr" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>В косметических препаратах применяется как консервант, разбавитель, модификатор pH, соответствующего pH кожи. Оказывает на кожу вяжущее, очищающее и отбеливающее действие. Вводится в состав очищающих кремов, депиляториев, ополаскивателей для волос, красок для волос, кремов от веснушек. Лимонная кислота используется как подкислитель в кормах. Обладает сильным антибактериальным действием, оказывает антистрессовое действие, является катализатором обмена веществ, синергистом антиоксидантов. Отвечает за активизацию ферментов, улучшает усвояемость кормов Все известные организации по контролю за пищевыми продуктами относят пищевую добавку Е330 к классу безопасных для здоровья.</textarea>
        <div class="card__content_title">Стандарты</div>
        <textarea class="card__descr" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>Соответствует стандартам качества: ВР2009, USP32, FCC6, E330.</textarea>
        <div class="card__content_title">Упаковка</div>
        <textarea class="card__descr" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>Pellentesque varius faucibus elementum sapien ultrices diam iaculis lacus mi</textarea>
        <div class="card__content_title">Хранение</div>
        <textarea class="card__descr" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>Enim consectetur eleifend in velit eget dui vulputate eleifend mauris</textarea>
        <div class="card__table">
            <div class="card__content_title">Таблица показателей</div>
            <div class="card__table_main">
                <div class="card__table_main-row">
                    <div class="card__table_main-heading card__table_main-name">
                        Название
                    </div>
                    <div class="card__table_main-heading card__table_main-amount">
                        количество
                    </div>
                </div>
                <div class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="Zoomit">
                    <input class="card__table_main-simple card__table_main-amount" value="ID: 97174">
                    <img class="card__table_main-simple_close" src="img/icons/card/close.svg" alt="close">
                </div>
                <div class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="Opentech">
                    <input class="card__table_main-simple card__table_main-amount" value="ID: 39635">
                    <img class="card__table_main-simple_close" src="img/icons/card/close.svg" alt="close">
                </div>
                <div class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="Ron-tech">
                    <input class="card__table_main-simple card__table_main-amount" value="ID: 70668">
                    <img class="card__table_main-simple_close" src="img/icons/card/close.svg" alt="close">
                </div>
                <div class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="Toughzap">
                    <input class="card__table_main-simple card__table_main-amount" value="ID: 97174">
                    <img class="card__table_main-simple_close" src="img/icons/card/close.svg" alt="close">
                </div>
                <div class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="Betasoloin">
                    <input  class="card__table_main-simple card__table_main-amount" value="ID: 43756">
                    <img class="card__table_main-simple_close" src="img/icons/card/close.svg" alt="close">
                </div>
                <div class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="Codehow">
                    <input class="card__table_main-simple card__table_main-amount" value="ID: 43178">
                    <img class="card__table_main-simple_close" src="img/icons/card/close.svg" alt="close">
                </div>
                <div class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="Plussunin">
                    <input class="card__table_main-simple card__table_main-amount" value="ID: 22739">
                    <img class="card__table_main-simple_close" src="img/icons/card/close.svg" alt="close">
                </div>
                <div class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="Plussunin">
                    <input class="card__table_main-simple card__table_main-amount" value="ID: 22739">
                    <img class="card__table_main-simple_close" src="img/icons/card/close.svg" alt="close">
                </div>
            </div>
            <div class="card__table_add">
                <span>Добавить строку</span>
                <img src="img/icons/card/chev_black.svg" alt="chev">
            </div>
        </div>
        <div class="card__btns">
            <div class="card__btns_btn card__btns_save">
                <span>Сохранить</span>
                <img src="img/icons/card/check.svg" alt="check">
            </div>
            <div class="card__btns_btn card__btns_delete">
                <span>Удалить</span>
                <img src="img/icons/card/close.svg" alt="close">
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <img src="img/icons/posts/logoFooter.svg" alt="logo">
            </div>
            <div class="footer__info">
                <div class="footer__info_social">
                    <div class="footer__info_social-title">Наші соціальні мережі</div>
                    <div class="footer__info_social-btns">
                        <a href="#"><img src="img/icons/posts/tg.svg" alt="tg"></a>
                        <a href="#"><img class="footer__info_social-skype" src="img/icons/posts/skype.svg" alt="tg"></a>
                        <a href="#"><img src="img/icons/posts/fb.svg" alt="tg"></a>
                    </div>
                </div>
                <div class="footer__info_place">
                    <div class="footer__info_social-title">АДРЕСА</div>
                    <div class="footer__info_place-descr">
                        2464 Royal Ln. Mesa, New Jersey 454a63
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
<script src="js/app.js"></script>
</body>
</html>
