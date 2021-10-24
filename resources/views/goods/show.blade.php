@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('contents')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Top</a></li>
    <li class="breadcrumb-item"><a href="/goods">商品一覧</a></li>
    <li class="breadcrumb-item active" aria-current="page">商品詳細</li>
  </ol>
</nav>
<h3>{{$item->goods_name}}</h3>
<div class="goods-detail-page">
    <div class="row justify-content-around goods-detail">
        <div class="col-6 border border-goods">
            <img src="{{ asset($item->image_url)}}" class="img-fluid h-100">
        </div>

        <form action="/order/{{$item->goods_id}}" method="post" class="col-6 goods-info">
            @csrf
            <h3 class="goods-name">{{$item->goods_name}}</h3>
            <p class="goods-code">商品コード：ABC{{$item->goods_id}}</p>
            <div class="row">
                <div class="col-6 d-flex">
                    <label class="goods-price-label mr-2">本体価格</label>
                    <p class="goods-price">{{$item->price}}</p>
                </div>
                <div class="col-6">
                    <label class="goods-price-label mr-2">個数：</label>
                    <input class="w-50" name="purchase_number" type="number" placeholder="0">
                </div>
            </div><!-- ./row -->
            <div class="stock-info-wrap">
                <p class="stock-info">
                    @if ($item->stock === 0)
                        在庫なし
                    @else
                        在庫あり
                    @endif
                </p>
            </div><!-- ./stock-info-wrap -->
            <div class="row goods-description-wrap">
                <p class="goods-description">{{$item->description}}</p>
            </div>
            
            <div class="row goods-buy-button-wrap">
                <input type="submit" value="商品を購入" class="goods-buy-button">
            </div>
        </form>
    </div><!-- ./goods-detail -->
</div><!-- ./goods-detail-page -->
@endsection('contents')
