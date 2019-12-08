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
