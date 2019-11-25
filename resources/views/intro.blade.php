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
                <p class="slogan">Fashion for all</p>
            </div>

            @include('common.menu')        
        </div>
        <!-- <div class="img__banner">
            <img src="images/img-01.png" alt="Phong Vu Company">
        </div> -->
        <div class="content__container">
            <div class="intro__wrapper">
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

                <div class="intro__list">
                    <div class="intro-item__wrapper">
                        <div class="intro__icon">
                            <img src="images/intro-01.png" alt="Phong Vu Company">
                            <p>Thành tựu</p>
                        </div>
                        <div class="intro__detail">
                            Trở thành Tập đoàn kinh tế mạnh trong lĩnh vực dệt may
                        </div>
                    </div>

                    <div class="intro-item__wrapper">
                        <div class="intro__icon">
                            <img src="images/intro-02.png" alt="Phong Vu Company">
                            <p>Sứ mệnh</p>
                        </div>
                        <div class="intro__detail">
                            Trở thành Tập đoàn kinh tế mạnh trong lĩnh vực dệt may
                        </div>
                    </div>

                    <div class="intro-item__wrapper">
                        <div class="intro__icon">
                            <img src="images/intro-03.png" alt="Phong Vu Company">
                            <p> Tầm nhìn</p>
                        </div>
                        <div class="intro__detail">
                            Trở thành Tập đoàn kinh tế mạnh trong lĩnh vực dệt may
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('common.footer')
    </body>
</htm>

