@extends('common/layout')
@extends('common/header') 
@extends('common/footer') 
@section('contents')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Top</a></li>
    <li class="breadcrumb-item active" aria-current="page">商品一覧</li>
  </ol>
</nav>

<div class="goods-list-page">
    <div class="row justify-content-around goods-list">
        @foreach ($items as $item)
        <div class="col-3 border border-goods mx-3 my-3">
            <a class="show-goods-{{$loop->iteration}}" href="/goods/{{$item->goods_id}}">
                <img src="{{ asset($item->image_url)}}" class="img-fluid">
                <div class="goods-info text-left">
                    <p class="goods-name">{{$item->goods_name}}</p>
                    <p class="goods-price">{{$item->price}}(税込)</p>
                </div>
            </a>
        </div>
        @endforeach
    </div><!-- ./goods-list -->
    {{ $items->links() }}
</div><!-- ./goods-list-page -->
@endsection('contents')
