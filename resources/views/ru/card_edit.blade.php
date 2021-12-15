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
    <title>Редагуванная</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="wrapper">
            <div class="header__logo">
                <a href="{{env('APP_URL')}}/admin">
                    <img src="{{env('APP_URL')}}/img/icons/posts/logo.svg" alt="logo">
                </a>
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
<section class="card">

    <form id="form_id" class="container" method="POST" enctype="multipart/form-data"
          action="{{env('APP_URL').'/updatePosts'}}">
        @csrf

        @if(session('error'))
            <div class="warning warning__active">
                <div>
                    <img src="{{env('APP_URL')}}/img/icons/card/close_red.svg" alt="warning">
                </div>
                <div class="warning__text">
                    {{session('error')}}
                </div>
                <div>
                    <img class="warning__close" src="{{env('APP_URL')}}/img/icons/card/close_red.svg" alt="close">
                </div>
            </div>
        @endif

        <input type="hidden" value="{{$product->id}}" name="id" id="lang_data">
        <input type="hidden" value="ru" name="lang" id="lang_data">
        <a href="{{env('APP_URL')}}/admin" class="card__wrapper">
            <img src="{{env('APP_URL')}}/img/icons/card/chevron.svg" alt="back">
            <div class="card__back">Повернутися до панели адміністратора</div>
        </a>
        <div class="card__language">
            <div class="card__title">Оберіть мову</div>
            <div class="card__tabs">

                <div class="card__tabs_tab" onclick="location.href='{{env('APP_URL').'/editEn/'.$main_id}}'">Eng</div>
                <div class="card__tabs_tab card__tabs_tab-active">Руc</div>
                <div class="card__tabs_tab" onclick="location.href='{{route("products.edit",$main_id)}}'">Укр</div>
            </div>
        </div>
        <div class="card__content">

            <div class="card__name">
                <div class="card__content_title">Назва* <span data-count="120"></span></div>
                <input required class="card__content_input" value="{{$product->name}}" name="name" type="text">
            </div>
            <div class="card__groupWrap">
                <div class="card__group">
                    <div class="card__content_title">Група* <span data-count="120"></span></div>
                    <input required class="card__content_input" value="{{$product->group}}" name="group" type="text">
                </div>
                <div class="card__application">
                    <div class="card__content_title">Галузь застосування <span data-count="120"></span></div>
                    <input required class="card__content_input" value="{{$product->field_of_usage}}"
                           name="field_of_usage" type="text">
                </div>
            </div>
        </div>
        <div class="card__groupWrap card__download">
            <div class="card__group">
                <label class="card__upload">
                    <span>Завантажити зображення</span>
                    <img src="{{env('APP_URL')}}/img/icons/card/upload.svg" alt="upload">
                    <input accept=".jpg,.png" type="file" name="img" id="myFile" name="filename">
                </label>
            </div>
            <div class="card__group">
                <img class="card__upload_img" width="380" height="240" id="imagehui"
                     src="{{env("APP_URL").($product->img)}}" alt="card">
                <div class="card__upload_name">
                    <div class="card__upload_name-name">
                        image.jpg
                    </div>
                    <div class="card__upload_name-size">
                        24 kB
                    </div>
                    <div class="card__upload_name-close">
                        <img src="{{env('APP_URL')}}/img/icons/card/close.svg" alt="close.svg">
                    </div>
                </div>
            </div>

        </div>
        <div>
            <div class="card__content_title">Опис товару* <span data-count="2080"></span></div>
            <textarea required class="card__descr" name="description"
                      oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$product->description}}"</textarea>
        </div>
        <div>
            <div class="card__content_title">Застосування продукту <span data-count="2080"></span></div>
            <textarea required class="card__descr" name="product_usage"
                      oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$product->Product_usage}}</textarea>
        </div>
        <div>
            <div class="card__content_title">Стандарти <span data-count="500"></span></div>
            <textarea required class="card__descr" name="standart"
                      oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$product->Standart}}</textarea>
        </div>
        <div>
            <div class="card__content_title">Упаковка <span data-count="500"></span></div>
            <textarea required class="card__descr" name="package"
                      oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$product->Package}}</textarea>
        </div>
        <div>
            <div class="card__content_title">Зберігання <span data-count="500"></span></div>
            <textarea required class="card__descr" name="stogare"
                      oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$product->Storage}}</textarea>
        </div>
        <div class="card__table">
            <div class="card__content_title">Таблиця показників</div>
            <div class="card__table_main">
                <div class="card__table_main-row">
                    <div class="card__table_main-heading card__table_main-name">
                        Назва
                    </div>
                    <div class="card__table_main-heading card__table_main-amount">
                        кількість
                    </div>
                </div>
                <div hidden class="card__table_main-row">
                    <input class="card__table_main-simple card__table_main-name" value="">
                    <input class="card__table_main-simple card__table_main-amount" value="">
                    <input type="hidden" class="card__table_id" value="">
                    <img class="card__table_main-simple_close" src="{{env('APP_URL')}}/img/icons/card/close.svg"
                         alt="close">
                </div>
                @foreach($entries as $entry)
                    <div class="card__table_main-row">
                        <input class="card__table_main-simple card__table_main-name" value="{{$entry->title}}">
                        <input class="card__table_main-simple card__table_main-amount" value="{{$entry->value}}">
                        <input type="hidden" class="card__table_id" value="{{$entry->id}}">
                        <img class="card__table_main-simple_close" src="{{env('APP_URL')}}/img/icons/card/close.svg"
                             alt="close">
                    </div>
                @endforeach
            </div>
            <div class="card__table_add">
                <span>Додати рядок</span>
                <img src="{{env('APP_URL')}}/img/icons/card/chev_black.svg" alt="chev">
            </div>
        </div>
        <div class="card__btns">
            <div class="card__btns_btn card__btns_save">
                <span id=submit_id>Зберегти</span>
                <img src="{{env('APP_URL')}}/img/icons/card/check.svg" alt="check">
            </div>
            <div class="card__btns_btn card__btns_delete">
                <span onclick="location.href='{{env("APP_URL")."/delete/".$product->id}}'">Видалити</span>
                <img src="{{env('APP_URL')}}/img/icons/card/close.svg" alt="close">
            </div>
        </div>
    </form>
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
<script src="{{env('APP_URL')}}/js/jquery-3.5.1.min.js"></script>
<script>

    function createTable() {
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('table.store')}}",
            data: {
                'title': "Название",
                'post_id': {{$main_id}},
                'value': "Значение"
            },
            success: function (data) {
                setId(data);
            },
        });

    }

    function deleteEntry(id) {
        $.ajax({
            type: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{env('APP_URL').'/table/'}}" + id,
            success: function (data) {
                console.log((data));
            },
        });
    }

    function changeTable(id, title, value) {
        $.ajax({
            type: "PUT",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'title': title,
                'value': value
            },
            url: "{{env('APP_URL').'/table/'}}" + id,

            success: function (data) {
                console.log((data));
            },
        });
    }


</script>
<script src="{{env('APP_URL')}}/js/card2.js"></script>
<script src="{{env('APP_URL')}}/js/counter.js"></script>
</body>
</html>
