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
                <p class="slogan">Fashion for all</p>
            </div>

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

                <div class="flex-block">
                    @foreach($products as $product)
                    <div class="list__item--two">
                        <a class="list__item" href="{{url('product',$product->id)}}">
                            <?php $image = getThumnailProduct($product->image); ?>
                            <img src="{{url($product->getPathImage($image['name']))}}" alt="{{$product->name}}">
                            <div class="label-on-card">                                
                                <span>{{$product->name}}</span>
                                <span class="text--hover">Tìm hiểu thêm</span>                                
                            </div>
                        </a>
                    </div>
                    @endforeach
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
