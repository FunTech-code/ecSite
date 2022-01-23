@extends('layouts.app')
@extends('common/header') 
@extends('common/footer') 

@section('content')
<div class="top-slide-img w-75 mx-auto">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <a class="carousel-control-prev bg-secondary" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <div class="carousel-inner border border-goods">
            <div class="carousel-item active">
                <a class="show-goods-1" href="/goods/3">
                    <img class="img-fluid mx-auto d-block w-40 mh-100" src="{{ asset('img/nami.png')}}" alt="First slide">
                </a>
            </div>
            <div class="carousel-item">
                <a class="show-goods-2" href="/goods/1">
                    <img class="img-fluid mx-auto d-block w-40 mh-100" src="{{ asset('img/luffy.png')}}" alt="Second slide">
                </a>
            </div>
            <div class="carousel-item">
                <a class="show-goods-3" href="/goods/2">
                    <img class="img-fluid mx-auto d-block w-40 mh-100" src="{{ asset('img/zoro_bandana.png')}}" alt="Third slide">
                </a>
            </div>
        </div>
        <a class="carousel-control-next bg-secondary" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="recommend-goods">
    <div class="sub-heading row">
        <div class="h5">おすすめ</div>
    </div>

    <div class="row justify-content-between">
    @foreach ($items as $item)
    <div class="col-3 border border-goods">
        <a class="show-goods-{{$loop->iteration}}" href="/goods/{{$item->goods_id}}">
            <img src="{{ asset($item->image_url)}}" class="img-fluid">
            <div class="goods-info text-left">
                <p class="goods-name">{{$item->goods_name}}</p>
                <p class="goods-price">{{$item->price}}(税込)</p>
            </div>
        </a>
    </div>
    @endforeach
    </div><!-- ./justify-content-between -->
</div>
@endsection('content')