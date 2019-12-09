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
        <link href="css/app.css" rel="stylesheet">
        
        <!-- Styles -->
    </head>
    <body>
    <div class="header__wrapper">
        <div class="logo">
            <a href="#">
                <img src="images/logo-phong-vu.png" alt="Phong Vu Company - Fashion for all">
            </a>
        </div>
        <p class="slogan">Fashion for all</p>
        @include('common.menu')        
    </div>
        <!-- <div class="img__banner">
            <img src="images/img-01.png" alt="Phong Vu Company">
        </div> -->
        <div class="content__container">
            <div class="policy__wrapper">
                <div class="page__label">
                    Về Công ty SX - TM thời trang Phong Vũ
                </div>
                <div class="page__detail">
                    <p><strong>Tên doanh nghiệp: </strong>Công ty SX - TM thời trang Phong Vũ</p>
                    <p><strong>Địa chỉ: </strong>340/67 Tân Hiệp Chánh 10, phường Tân Chánh Hiệp, quận 12, Hồ Chí Minh</p>
                    <p><strong>Số điện thoại: </strong>0904 579 039</p>
                    <p><strong>Người đại diện pháp luật: </strong>Ông Lê Phong Vũ - Tổng Giám Đốc</p>
                    <p><strong>Lĩnh vực kinh doanh: </strong></p>
                        <ul>
                            <li>– Sản xuất quần áo các loại áo quần</li>
                            <li>– Sản xuất quần áo các nón</li>
                        </ul>
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
</htm>

