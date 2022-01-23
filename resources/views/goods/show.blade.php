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

        <div class="description-block row col-6">
            <form action="/order/{{$item->goods_id}}" method="post" class="col-10 goods-info">
                @csrf
                <h3 class="goods-name mb-4">{{$item->goods_name}}</h3>
                <p class="goods-code">商品コード：{{$item->item_code}}</p>
                <div class="row">
                    <div class="col-6 d-flex">
                        <label class="goods-price-label mr-3">本体価格</label>
                        <p class="goods-price">{{$item->price}}</p>
                    </div>
                    <div class="col-6">
                        <label class="goods-price-label mr-3">個数：</label>
                        <input class="w-25" type="text" name="purchase_number" maxlength="3" placeholder="1" oninput="value = value.replace(/[^0-9]+/i,'');">
                    </div>
                    @if ($errors->any())
                        <p class="error">
                            @foreach ($errors->all() as $error)
                                <strong>{{ $error }}</strong>
                            @endforeach
                        </p>
                    @endif
                    @if(session('err_msg'))
                    <p class="error">
                        <strong>{{ session('err_msg') }}</strong>
                    </p>
                    @endif
                </div><!-- ./row -->
                <div class="row">
                    <div class="stock-info-wrap col-12 mx-auto mb-5 d-flex align-items-center justify-content-center">
                        <p class="stock-info my-auto">
                            @if ($item->stock === 0)
                                在庫なし
                            @else
                                在庫あり
                            @endif
                        </p>
                    </div><!-- ./stock-info-wrap -->
                </div><!-- ./row -->
                <div class="row">
                    <div class="goods-description-wrap col-10 mx-auto mb-4 p-0">
                        <p class="goods-description">{{$item->goods_description}}</p>
                    </div>
                </div>
                
                <div class="row goods-buy-btn-wrap">
                    <input type="submit" value="商品を購入" class="goods-buy-btn col-12 btn btn-dark mx-auto">
                </div>
            </form>
        </div>
    </div><!-- ./goods-detail -->
</div><!-- ./goods-detail-page -->
@endsection('contents')
