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
    <link rel="stylesheet" href="css/posts.min.css">
    <title>Admin</title>
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
<section class="post">
    <div class="container">
        <div class="wrapper">
            <div class="post__title">Posts</div>
            <div class="post__add">
                <span onclick="location.href='{{route('products_admin.create')}}'">Add new post</span>
                <img src="img/icons/posts/plus.svg" alt="plus">
            </div>
        </div>
        <div class="post__container">
            @foreach($products as $product)
            <div class="post__block">
                <div class="post__block_img">
                    <img src="{{env("STORAGE_URL").($product->img)}}" alt="lorem">
                </div>
                <div class="post__block_info">
                    <div class="post__block_title">{{ $product->name }} </div>
                    <div class="post__block_wrapper">
                        <div class="post__block_wrapper-type">Група</div>
                        <div class="post__block_wrapper-content">{{ $product->group }}</div>
                    </div>
                    <div class="post__block_wrapper post__block_wrapper-offset">
                        <div class="post__block_wrapper-type">Галузь застосування</div>
                        <div class="post__block_wrapper-content">{{ $product->field_of_usage }}</div>
                    </div>
                </div>
                <div class="post__block_btns">
                    <div class="post__block_btn post__block_edit">
                        <span onclick="location.href='{{route('products_admin.edit',$product->id)}}'">Edit</span>
                        <img src="img/icons/posts/edit.svg" alt="edit">
                    </div>
                    <div class="post__block_btn post__block_close">
                        <span onclick="location.href=' {{env('APP_URL').'/delete/'.$product->id}}'">Delete</span>
                        <img src="img/icons/posts/close.svg" alt="close">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $products->links() }}
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
</body>
</html>