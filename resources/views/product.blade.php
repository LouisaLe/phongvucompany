<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phong Vu - Fashion for all</title>
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../css/app.css" rel="stylesheet">
        
        <!-- Styles -->
    </head>
    <body>
        <div class="header__wrapper">
            <div class="logo">
                <a href="#">
                    <img src="../images/logo-phong-vu.png" alt="Phong Vu Company - Fashion for all">
                </a>
                <!-- <p class="slogan">Fashion for all</p> -->
            </div>

            @include('common.menu')        
        </div>
        <div class="content__container">
            <div class="product__wrapper right">
                <div class="image__banner">
                    <?php $images = getProductImages($product->image);?>
                    @foreach($images as $image)
                        <img src="{{url($product->getPathImage($image['name']))}}" alt="{{$product->name}}">
                    @endforeach
                </div>
            </div>
            <div class="product--detail left">
                <h1>{{$product->name}}</h1>
            </div>
            <div class="product--detail description">
                <p>{{$product->description}}</p>
            </div>
        </div>
        <!-- footer code -->

        <div class="footer__wrapper">
            <div class="content__container">
                <div class="footer__content">
                    <div class="footer__item">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="../images/logo-phong-vu.png" alt="Phong Vu Company - Fashion for all">
                            </a>
                            <p class="slogan">Fashion for all</p>
                        </div>
                    </div>
                    <div class="footer__item">
                        <p class="title">Kết nối với chúng tôi</p>
                        <span>
                            <a href="https://www.facebook.com/" target="_blank">
                                <img src="../images/ico-fb.png" alt="Facebook">
                            </a>
                        </span>
                        <span>
                            <a href="#" target="_blank">
                                <img src="../images/ico-skype.png" alt="Skype">
                            </a>
                        </span>
                    </div>
                    <div class="footer__item">
                        <p class="title">Liên Hệ</p>
                        <p>Địa chỉ: 340/67 Tân Hiệp Chánh 10, phường Tân Chánh Hiệp, quận 12, Hồ Chí Minh</p>
                        <p>Điện thoại: 0904 579 039</p>
                        <p>Email: thoitrangphongvu@diamon.com</p>
                    </div>
                </div>
                
            </div>
            <div class="copy-right">
                <span class="icon-copyright">&#169; 2019 PHONG VU</span>
                <span>Bản quyền thuộc về Công ty SX - TM thời trang Phong Vũ</span>
            </div>
        </div>

        <div id="scrollTop" class="button__scroll-top">
            <img src="../images/arrow-top.png" alt="Go to top">
        </div>
        <script src="../js/main.js"></script>
    </body>
</html>

