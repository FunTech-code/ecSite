@extends('layouts.app')
@extends('common/header') 
@extends('common/footer') 
@section('content')
<div class="bought-goods-page">
    <div class="page-heading pb-2 mb-5">
        <h4>購入完了</h4>
    </div>
    <div class="bought-msg text-left">
        <h4>ご購入ありがとうございました。</h4>
        <aside>
            <p>購入情報をアドレスにメールでお送りしました。ご確認ください。</p>
        </aside>
    </div>
    <div class="row justify-content-around bought-goods">
        <section class="addressee col-6 border border-goods">
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
        
        <section class="goods-info col-6 d-flex">
            <img src="{{ asset($item->image_url)}}" class="img-fluid">
            <div class="goods-info-text">
                <h6 class="goods-name">{{$item->goods_name}}</h6>
                <p class="goods-code">商品コード：ABC{{$item->goods_id}}</p>
                <div class="d-flex">
                    <label class="goods-price-label mr-2">本体価格</label>
                    <p class="goods-price">{{$item->price}}</p>
                </div>
            </div>
        </section><!-- ./goods-info -->
    </div><!-- ./bought-goods -->
</div><!-- ./bought-goods-page -->
@endsection('content')
