@extends('layouts.app')
@extends('common/header') 
@extends('common/footer') 
@section('content')
<div class="bought-goods-page">
    <div class="page-heading pb-2 mb-5 page-title-border ">
        <h4>購入完了</h4>
    </div>
    <div class="bought-msg text-left mb-5">
        <h4>ご購入ありがとうございました。</h4>
    </div>
    <div class="row justify-content-around bought-goods">
        <section class="addressee col-7">
            <h5 class="text-left">お届け先</h5>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">郵便番号</th>
                        <td>{{$user->postal_code}}</td>
                    </tr>
                    <tr>
                        <th scope="row">都道府県</th>
                        <td>{{$user->prefectures}}</td>
                    </tr>
                    <tr>
                        <th scope="row">市区町村</th>
                        <td>{{$user->municipalities}}</td>
                    </tr>
                    <tr>
                        <th scope="row">番地・建物名・部屋番号</th>
                        <td>{{$user->address_details}}</td>
                    </tr>
                </tbody>
            </table>
        </section><!-- ./addressee -->
        
        <section class="goods-info col-5">
            <div>
                <p>商品情報</p>
            </div>
            <div class="goods-info-wrap d-flex">
                <img src="{{ asset($item->image_url)}}" class="img-fluid mr-3 w-25 h-auto border">
                <div class="goods-info-text">
                    <h6 class="goods-name h4 mb-3">{{$item->goods_name}}</h6>
                    <p class="goods-code">商品コード：{{$item->item_code}}</p>
                    <div class="goods-price-wrap d-flex h5">
                        <label class="goods-price-label mr-2">本体価格</label>
                        <p class="goods-price">{{$item->price}}</p>
                    </div>
                </div>
            </div>
        </section><!-- ./goods-info -->
    </div><!-- ./bought-goods -->
</div><!-- ./bought-goods-page -->
@endsection('content')
