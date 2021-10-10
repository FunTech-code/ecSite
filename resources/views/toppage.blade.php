@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('top')
@if (!empty($user))
<h4>user:{{ $user }}
@endif
</h4>
<div class="top-slide-img">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img class="d-block w-50" src="{{ asset('img/nami.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-50" src="{{ asset('img/luffy.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-50" src="{{ asset('img/toy.png')}}" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
@endsection('top')