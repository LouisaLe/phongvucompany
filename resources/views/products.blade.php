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
    <link href="{{url("access/slick.css")}}" rel="stylesheet">
    <link href="{{url("access/slick-theme.css")}}" rel="stylesheet">
    <link href="{{url("css/app.css")}}" rel="stylesheet">

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
        <div class="goods__list">
            <ul id="filterProducts">
                <li id="pro1" class="active"><a href="{{url("products/1")}}">Nón</a></li>
                <li id="pro2"><a href="{{url("products/2")}}">Quần áo</a></li>
                <li id="pro3"><a href="{{url("products/3")}}">Giày dép</a></li>
            </ul>
        </div>
        <section id="list__pro1" class="active">
            <div class="product__list-name">
                @if($cateId == '1')
                    Nón
                @endif
                @if($cateId == '2')
                    Quần Áo
                @endif
                @if($cateId == '3')
                    Giày Dép
                @endif
            </div>
            <div class="news-list__wrapper">
                @foreach($products as $product)
                    <?php $image = getThumnailProduct($product->image); ?>
                    <div class="news-item__wrapper">
                        <div class="news-item__image">
                            <img src="{{url($product->getPathImage($image['name']))}}" alt="{{$product->name}}">
                        </div>
                        <div class="news-item__cotent">
                            <div class="news-item__title">
                                {{$product->name}}
                            </div>
                            <div class="news-item__date">
                                {{$product->sku}}
                            </div>
                            <div class="news-item__desc">
                                Thông tin sản phẩm
                                {!! $product->summary !!}
                            </div>
                        </div>
                    </div>
                @endforeach
                @if(count($products) <1 )
                    <h3>Không có sản phẩm</h3>
                @endif
            </div>
        </section>


    </div>
</div>

@include('common.footer')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqvk9n1UMCme4tmMCtTzz_0VUuO2Br5Y&callback=initMap">
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="{{url("access/slick.min.js")}}"></script>
<script src="{{url("js/main.js")}}"></script>
</body>
</html>
