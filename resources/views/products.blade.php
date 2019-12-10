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
        <link href="access/slick.css" rel="stylesheet">
        <link href="access/slick-theme.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        
        <!-- Styles -->
    </head>
    <body>
        @include('common.nav-header')
        <!-- main content -->
        <div class="main__wrapper">
            <div id="products" class="content__container">
                <div id="listProducts" class="label__list">
                    Sản phẩm
                </div>
                <div class="product__list-name">Nón</div>
                <div class="news-list__wrapper">
                    <div class="news-item__wrapper">
                        <div class="news-item__image">
                            <img src="images/cap-04.png" alt="Phong Vu Company - Fashion for all">                            
                        </div>
                        <div class="news-item__cotent">
                            <div class="news-item__title">
                                Nón len
                            </div>
                            <div class="news-item__date">
                               Mã sản phẩm
                            </div>
                            <div class="news-item__desc">
                                Thông tin sản phẩm
                                <ul>
                                    <li>Màu sắc:</li>
                                    <li>Kích cỡ/size: </li>
                                    <li>Chất liệu: </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-item__wrapper">
                        <div class="news-item__image">
                            <img src="images/cap-04.png" alt="Phong Vu Company - Fashion for all">                            
                        </div>
                        <div class="news-item__cotent">
                            <div class="news-item__title">
                                Nón lưỡi chai
                            </div>
                            <div class="news-item__date">
                               Mã sản phẩm
                            </div>
                            <div class="news-item__desc">
                                Thông tin sản phẩm
                                <ul>
                                    <li>Màu sắc:</li>
                                    <li>Kích cỡ/size: </li>
                                    <li>Chất liệu: </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-item__wrapper">
                        <div class="news-item__image">
                            <img src="images/cap-04.png" alt="Phong Vu Company - Fashion for all">                            
                        </div>
                        <div class="news-item__cotent">
                            <div class="news-item__title">
                                Nón Vành Rộng
                            </div>
                            <div class="news-item__date">
                               Mã sản phẩm
                            </div>
                            <div class="news-item__desc">
                                Thông tin sản phẩm
                                <ul>
                                    <li>Màu sắc:</li>
                                    <li>Kích cỡ/size: </li>
                                    <li>Chất liệu: </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('common.footer')        
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqvk9n1UMCme4tmMCtTzz_0VUuO2Br5Y&callback=initMap">
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="access/slick.min.js"></script>
        <script src="js/main.js"></script>        
    </body>
</html>
