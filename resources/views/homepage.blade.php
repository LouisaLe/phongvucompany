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
        <!-- <div class="top-menu">
            Hotline: 0904 379 309
        </div> -->

        <script>
        function initMap() {
            var uluru = { lat: -25.344, lng: 131.036 };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), { zoom: 4, center: uluru });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({ position: uluru, map: map });
        }
        </script>

        <div class="header__wrapper">
            <div class="logo">
                <a href="#">
                    <img src="images/logo-phong-vu.png" alt="Phong Vu Company - Fashion for all">
                </a>
            </div>
            <p class="slogan">Fashion for all</p>
            @include('common.menu')        
        </div>
        
        <!-- main content -->
        <div class="main__wrapper">
            <div class="getting-page__wrapper">
            <div class="arrow bounce"></div>
            @include('common.banner-slider')            
            </div>
            <div class="content__container">
                <div id="listProducts" class="label__list">
                    Sản phẩm
                </div>

                <div id="productSlider" class="flex-block">
                    @foreach($products as $product)
                    <div class="list__item--two">
                        <a class="list__item" href="{{url('product',$product->id)}}">
                            <?php $image = getThumnailProduct($product->image); ?>
                            <img src="{{url($product->getPathImage($image['name']))}}" alt="{{$product->name}}">
                            <div class="label-on-card">                                
                                <p class="text-shown">{{$product->name}}</p>
                                <p class="text-shown">Test Number</p>
                                <p class="text--hover">Tìm hiểu thêm</p>                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

                <div class="label__list">
                    Tin tức, sự kiện
                </div>
                <div id="newsList" class="news-list__wrapper">
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
                </div>

                <div class="label__list">
                    Video
                </div>
                <div id="videosList" class="videos-list__wrapper">
                    <div class="main-video__wrapper">
                        <iframe src="https://www.youtube.com/embed/wF8ELKKTu_A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="sub-videos__wrapper">
                        <div class="label__list">
                            Video liên quan
                        </div>
                        <div id="videoSlider" class="prepare-videos__list">
                            <div class="video__item">
                                <iframe src="https://www.youtube.com/embed/wF8ELKKTu_A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="video__item">
                                <iframe src="https://www.youtube.com/embed/wF8ELKKTu_A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <!-- <div class="video__item">
                                <iframe src="https://www.youtube.com/embed/wF8ELKKTu_A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="label__list">
                    Đối tác
                </div>
                <div id="coperations" class="coperations">
                    <div class="cop__item">
                        <img src="images/logo-dt-01.jpg" alt="Logo đối tác">
                    </div>
                    <div class="cop__item">
                        <img src="images/logo-dt-01.jpg" alt="Logo đối tác">
                    </div>
                    <div class="cop__item">
                        <img src="images/logo-dt-01.jpg" alt="Logo đối tác">
                    </div>
                    <div class="cop__item">
                        <img src="images/logo-dt-01.jpg" alt="Logo đối tác">
                    </div>
                    <div class="cop__item">
                        <img src="images/logo-dt-01.jpg" alt="Logo đối tác">
                    </div>
                    <div class="cop__item">
                        <img src="images/logo-dt-01.jpg" alt="Logo đối tác">
                    </div>                    
                    <div class="cop__item">
                        <img src="images/logo-dt-01.jpg" alt="Logo đối tác">
                    </div>
                    <div class="cop__item">
                        <img src="images/logo-dt-01.jpg" alt="Logo đối tác">
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
