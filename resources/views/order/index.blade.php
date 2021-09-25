@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('bought-goods')
<!--<nav aria-label="breadcrumb">-->
<!--  <ol class="breadcrumb">-->
<!--    <li class="breadcrumb-item"><a href="/">Top</a></li>-->
<!--    <li class="breadcrumb-item"><a href="/goods">商品一覧</a></li>-->
<!--    <li class="breadcrumb-item active" aria-current="page">購入完了</li>-->
<!--  </ol>-->
<!--</nav>-->
<div class="bought-goods-page">
    <div class="page-heading pb-2 mb-5">
        <h4>購入完了</h4>
        <p class="goods-name">{{$item}}</p>
    </div>

</div><!-- ./bought-goods-page -->
@endsection('bought-goods')
