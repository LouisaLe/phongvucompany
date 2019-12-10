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
        @include('common.nav-header')
        <div id="newslist" class="main__wrapper">
        <div class="content__container">

<div class="label__list">
            Tin tức, sự kiện
        </div>
        <div id="newsList" class="news-list__wrapper">
            <a href="{{'news-detail'}}" class="news-item__wrapper">
                <div class="news-item__image">
                    <img src="images/cap-04.png" alt="Phong Vu Company - Fashion for all">                            
                </div>
                <div class="news-item__cotent">
                    <div class="news-item__title">
                        Cách chọn mũ vành rộng duyên dáng và xinh đẹp
                    </div>
                    <div class="news-item__date">
                        Ngày: 20-10-2019
                    </div>
                    <div class="news-item__desc">
                        Những chiếc mũ rộng vành này là “vũ khí” bảo vệ cho cả mái tóc, làn da và là 1 món thời trang khơi gợi nét duyên dáng, yêu kiều của bạn. Ngoài kiểu mũ rộng vành dành cho mùa hè & biển năm nay, Chất liệu sử dụng phổ biến nhất cho các kiểu NÓN mùa hè đặc điểm nhẹ, thông thoáng.
                    </div>
                </div>
            </a>
            <div class="news-item__wrapper">
                <div class="news-item__image">
                    <img src="images/cap-04.png" alt="Phong Vu Company - Fashion for all">                            
                </div>
                <div class="news-item__cotent">
                    <div class="news-item__title">
                        Cách chọn mũ vành rộng duyên dáng và xinh đẹp
                    </div>
                    <div class="news-item__date">
                        Ngày: 20-10-2019
                    </div>
                    <div class="news-item__desc">
                        Những chiếc mũ rộng vành này là “vũ khí” bảo vệ cho cả mái tóc, làn da và là 1 món thời trang khơi gợi nét duyên dáng, yêu kiều của bạn. Ngoài kiểu mũ rộng vành dành cho mùa hè & biển năm nay, Chất liệu sử dụng phổ biến nhất cho các kiểu NÓN mùa hè đặc điểm nhẹ, thông thoáng.
                    </div>
                </div>
            </div>
            <div class="news-item__wrapper">
                <div class="news-item__image">
                    <img src="images/cap-04.png" alt="Phong Vu Company - Fashion for all">                            
                </div>
                <div class="news-item__cotent">
                    <div class="news-item__title">
                        Cách chọn mũ vành rộng duyên dáng và xinh đẹp
                    </div>
                    <div class="news-item__date">
                        Ngày: 20-10-2019
                    </div>
                    <div class="news-item__desc">
                        Những chiếc mũ rộng vành này là “vũ khí” bảo vệ cho cả mái tóc, làn da và là 1 món thời trang khơi gợi nét duyên dáng, yêu kiều của bạn. Ngoài kiểu mũ rộng vành dành cho mùa hè & biển năm nay, Chất liệu sử dụng phổ biến nhất cho các kiểu NÓN mùa hè đặc điểm nhẹ, thông thoáng.
                    </div>
                </div>
            </div>

            <div class="paging__wrapper">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>
</div>
        </div>
        
        <!-- footer code -->
        @include('common.footer')
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqvk9n1UMCme4tmMCtTzz_0VUuO2Br5Y&callback=initMap">
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="access/slick.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

