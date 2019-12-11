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
        @include('common.nav-header')
        <div class="main__wrapper">
            <div id="productDetail" class="content__container">
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

