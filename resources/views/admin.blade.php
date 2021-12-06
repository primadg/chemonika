<head>
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Панель Адміністратора</title>

</head>
<body style="margin-left: 100px">

<h1>admin panel</h1>
<br>
<br>
<div class="header__info_lang">
    <div class="header__info_lang-chosen">UKR</div>
    <svg class="header__info_lang-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="header__info_lang-arrow_path" d="M10.59 0.59L6 5.17L1.41 0.59L0 2L6 8L12 2L10.59 0.59Z" fill="#263640"/>
    </svg>
    <ul class="header__info_lang-dropdown">
        <li class="header__info_lang-dropdown-li"><a style="text-decoration: none;" href="{{env('APP_URL').'/ukr'}}">ukr</a></li>
        <li class="header__info_lang-dropdown-li"><a style="text-decoration: none;" href="{{env('APP_URL').'/ru'}}">ru</a></li>
        <li class="header__info_lang-dropdown-li"><a style="text-decoration: none;" href="{{env('APP_URL').'/en'}}">en</a></li>
    </ul>
</div>
<br>
<br>
<br>
<br>
<br>
{!!   $content !!}



<script src="js/jquery-3.5.1.min.js"></script>
<script>
    $('.header__info_lang-chosen').html("{{$lang}}");
</script>
<script src="js/app.js"></script>
</body>
