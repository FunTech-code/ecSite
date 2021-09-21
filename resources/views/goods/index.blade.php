@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('goods-list')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Top</a></li>
    <li class="breadcrumb-item active" aria-current="page">商品一覧</li>
  </ol>
</nav>

<div class="signup-page">
    <div class="row justify-content-between goods-list-1">
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
    </div><!-- ./goods-list-1 -->
    
    <div class="row justify-content-between goods-list-2">
        <div class="col-3 border border-goods">
            <a class="show-goods-1" href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
                <div class="goods-info text-left">
                    <p class="goods-name">商品名４</p>
                    <p class="goods-price">¥100,000(税込)</p>
                </div>
            </a>
        </div>
        <div class="col-3 border border-goods">
            <a class="show-goods-2" href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
                <div class="goods-info text-left">
                    <p class="goods-name">商品名５</p>
                    <p class="goods-price">¥2,000(税込)</p>
                </div>
            </a>
        </div>
        <div class="col-3 border border-goods">
            <a class="show-goods-3" href="https://google.com">
                <img src="{{ asset('img/toy.png')}}" class="img-fluid">
                <div class="goods-info text-left">
                    <p class="goods-name">商品名６</p>
                    <p class="goods-price">¥350(税込)</p>
                </div>
            </a>
        </div>
    </div><!-- ./goods-list-2 -->
</div><!-- ./signup-page -->
@endsection('goods-list')
