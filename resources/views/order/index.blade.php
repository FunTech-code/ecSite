@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('contents')
<div class="bought-goods-page">
    <div class="page-heading pb-2 mb-5">
        <h4>購入完了</h4>
        <p class="goods-name">{{$item}}</p>
    </div>

</div><!-- ./bought-goods-page -->
@endsection('contents')
