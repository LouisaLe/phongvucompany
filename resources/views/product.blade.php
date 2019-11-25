<div class="product__wrapper right">
    <div class="image">
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