@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('top')
@if (!empty($user))
<h4>user:{{ $user }}
@endif
</h4>
<div class="top-slide-img">
    <div class="row">
        <div class="col-2 align-self-center text-center">
            <i class="far fa-caret-square-left fa-6x"></i>
        </div>
        <div class="col-8 text-center text-center">
            <img src="{{ asset('img/toy.png')}}" class="w-50">
        </div>
        <div class="col-2 align-self-center text-center">
            <i class="far fa-caret-square-right fa-6x"></i>
        </div>
    </div>
</div>
<div class="recommend-goods">
    <div class="sub-heading row">
        <div class="h5">おすすめ</div>
    </div>
    <div class="row justify-content-between">
        <div class="col-3 border border-goods">
            <a class="show-goods-1" href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
                <div class="goods-info text-left">
                    <p class="goods-name">商品名１</p>
                    <p class="goods-price">¥100,000(税込)</p>
                </div>
            </a>
        </div>
        <div class="col-3 border border-goods">
            <a class="show-goods-2" href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
                <div class="goods-info text-left">
                    <p class="goods-name">商品名２</p>
                    <p class="goods-price">¥2,000(税込)</p>
                </div>
            </a>
        </div>
        <div class="col-3 border border-goods">
            <a class="show-goods-3" href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
                <div class="goods-info text-left">
                    <p class="goods-name">商品名３</p>
                    <p class="goods-price">¥350(税込)</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection('top')